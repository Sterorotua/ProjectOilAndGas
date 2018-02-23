/* Function to add a new oil contract */
function add_contract(path){
    
    emptyField('add_contract_operator');
    emptyField('add_contract_oil_company');
    emptyField('add_contract_country');
    emptyField('add_contract_base');
    emptyField('add_contract_comment');
    emptyField('add_contract_helicopter_constructor');
    emptyField('add_contract_helicopter_category');
    emptyField('add_contract_helicopter_type');
    emptyField('add_contract_helicopter_quantity'); 
    emptyField('add_contract_contract_status');
    emptyField('add_contract_start_date');
    emptyField('add_contract_end_date');
    emptyField('add_contract_options');
    emptyField('platforms_sortable');
    emptyField('add_contract_mission_order');
    emptyField('add_contract_summary');
    emptyField('add_contract_comment');
    
    $('.select2').selectpicker('refresh');
    
    $.ajax({
        url: path,
        type: "POST",
        dataType: 'json',
        success: function(data){
            
            forEachSelect(data['oilCompanies'], 'add_contract_oil_company');
            forEachSelect(data['operators'], 'add_contract_operator');
            forEachSelect(data['countries'], 'add_contract_country');
            forEachSelect(data['bases'], 'add_contract_base');
            forEachSelect(data['projectStatus'], 'add_contract_contract_status');
            forEachSelect(data['platforms'], 'add_contract_platforms');
            forEachSelect(data['manufacturers'], 'add_contract_helicopter_constructor');
            forEachSelect(data['helicopterCategories'], 'add_contract_helicopter_category');

        }
    });
    
}

function forEachSelect(objects, selectName){
    
    $('#' + selectName).html("");
    
    $.each(objects, function(){
        $('#' + selectName).append( $('<option></option>').attr('value', this.id).text(this.name) );
    });

    $('#' + selectName).selectpicker('refresh');
    
}

function emptyField(id){
    
    $('#'+id).val("");
    $('#'+id).html("");
    
}

$(document).ready(function(){
    
    var map = initialize();
    var polylines = [];
    
    $('#myModalFormContent').bootstrapWizard(
        {
            onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#bar').css({width:$percent+'%'});

                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#myModalFormContent').find('.pager .next').hide();
                    $('#myModalFormContent').find('.pager .finish').show();
                    $('#bar').attr('class', 'progress-bar progress-bar-success');
                    $('#myModalFormContent').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#myModalFormContent').find('.pager .next').show();
                    $('#bar').attr('class', 'progress-bar progress-bar-striped');
                    $('#myModalFormContent').find('.pager .finish').hide();
                }
        }
    });
    
    $('.finish').on('click', function() {
        add_platforms_sortable.serialize();

        $.ajax({
            url:        Routing.generate('_contract_add'),
            type:       'POST',
            data:       $('#add_contract_form').serialize(),
            success:    function(data){
                $('#myModalFormContent').bootstrapWizard('show', 0);
                $('#bar').attr('class', 'progress-bar progress-bar-striped');
                if (!(data.indexOf("Error") !== -1))
                    $('#contract_add_modal').modal('hide');
                alert(data);
            }
        });
    });
    
    $('#add_contract_country').change(function(){
        $('#add_contract_base').html("");
        $.ajax({
            url:        Routing.generate('_search_bases'),
            type:       'POST',
            dataType:   'json',
            data:       $('#add_contract_country'),
            success:    function(data){
                var select = $('#add_contract_base');
                $.each(data, function(key, base){
                    select.append('<option value="'+base.id+'">'+base.name+'</option>');
                });
                select.selectpicker('refresh');
                
                emptyField('add_contract_platforms');
                $.ajax({
                    url:        Routing.generate('_search_platforms'),
                    type:       'POST',
                    dataType:   'json',
                    data:       $('#add_contract_country'),
                    success:    function(data){
                        var select = $('#add_contract_platforms');
                        $.each(data, function(key, platform){
                            select.append('<option value="'+platform.id+'">'+platform.name+'</option>');
                        });
                        select.selectpicker('refresh');
                    }
                });
            }
        });
    });
    
    // Prevent the submission of the form to find a contract when the "Add new contract" button is pressed
    $('#contract_add_btn').on('click', function(e){      
        e.preventDefault();      
    });
    
    $('.datepicker').datepicker();
    
    var contractTable = $('#contract_result_table').DataTable({
        responsive: true,
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf'
        ]
    });
    
    var add_platforms_sortable = $('#platforms_sortable').sortable({
        update: function(event, ui) {
            var order = add_platforms_sortable.sortable("toArray");
            $('#add_contract_mission_order').val(order.join(","));
        }
    });
    
    $( "platforms_sortable" ).disableSelection();
    
    $('#add_contract_platforms').change(function(){
        $('.selectpicker').selectpicker('refresh');
        $('#platforms_sortable').html("");
        $.each($('select#add_contract_platforms option:selected'), function(){
            $('#platforms_sortable').append('<li class="ui-state-default" id="'+ $(this).val() +'"><span><i class="fa fa-random"></i> '+$(this).text()+'</span></li>');
        });
        $('#add_contract_mission_order').val(add_platforms_sortable.sortable("toArray").join(","));
    });
    
    $('#add_contract_helicopter_constructor').on('change', function(e){
        e.preventDefault();
        
        if ($('select#add_contract_helicopter_constructor option:selected').length > 0 
            || $('select#add_contract_helicopter_category option:selected').length > 0){
            
            $.ajax({
            
                url: Routing.generate('_helicopter_find'),
                type: 'POST',
                dataType: 'json',
                data: {
                    'constructors': $('#add_contract_helicopter_constructor').val(),
                    'categories': $('#add_contract_helicopter_category').val()
                },
                success: function(data){
                    emptyField('add_contract_helicopter_type');
                    emptyField('add_contract_helicopter_quantity');
                    forEachSelect(data, 'add_contract_helicopter_type');
                }

            });
            
        }
        else{
            emptyField('add_contract_helicopter_type');
            emptyField('add_contract_helicopter_quantity');
            $('#add_contract_helicopter_type').selectpicker('refresh');
        }
        
    });
    
    $('#add_contract_helicopter_category').on('change', function(e){
        
        e.preventDefault();
        
        if ($('select#add_contract_helicopter_constructor option:selected').length > 0 
            || $('select#add_contract_helicopter_category option:selected').length > 0){
        
            $.ajax({

                url: Routing.generate('_helicopter_find'),
                type: 'POST',
                dataType: 'json',
                data: {
                    'constructors': $('#add_contract_helicopter_constructor').val(),
                    'categories': $('#add_contract_helicopter_category').val()
                },
                success: function(data){
                    $('#add_contract_helicopter_type').html("");
                    $('#add_contract_helicopter_quantity').html("");
                    forEachSelect(data, 'add_contract_helicopter_type');
                }

            });
        }
        else{
            emptyField('add_contract_helicopter_type');
            emptyField('add_contract_helicopter_quantity');
            $('#add_contract_helicopter_type').selectpicker('refresh');
        }
        
    });
    
    $('#add_contract_helicopter_type').on('change', function(e){
        
        e.preventDefault();
        
        $('#add_contract_helicopter_quantity').html("");
        
        $.each($('select#add_contract_helicopter_type option:selected'), function(){
            
            $('#add_contract_helicopter_quantity').append('<label>'+ $(this).text() +'<label>');
            $('#add_contract_helicopter_quantity').append($('<input></input>').attr('name', $(this).text())
                                                                                .attr('type', 'number')
                                                                                .attr('min', '1')
                                                                                .attr('class', 'form-control'));
            
        });
        
    });
    
    $('#contract_filter_btn').on('click', function(e){
        
        e.preventDefault();
        
        contractTable.clear();
        removeMissions(polylines);
        removeMarkers(allMarkers);
        var btn = $(this);
        
        $.ajax({
            url: Routing.generate('_contracts_search'),
            type: "POST",
            data: $('#contractForm').serialize(),
            dataType: 'json',
            beforeSend: function(){
                btn.button('loading');
            },
            complete: function(){
                btn.button('reset');
            },
            success: function(data){
                contractTable.clear().draw();
                
                if(data['empty'] != 1){
                    $.each(data, function(contractKey, contract){
                        contractTable.row.add({
                            0 : contract.area,
                            1 : contract.country,
                            2 : contract.name,
                            3 : contract.oilCompany,
                            4 : contract.operator,
                            5 : contract.base.name,
                            6 : contract.status,
                            7 : contract.contractTiming,
                            8 : contract.summary,
                            9 : '<button class="btn btn-default btn-sm" onClick="openDetailWindow(Routing.generate(\'_contract_detail\', {id:'+contract.id+'}))" role="button"><i class="fa fa-folder"></i></button>'
                        }).draw();
                        if (typeof contract.mission !== 'undefined'){
                            polylines.push(drawMissions(contract.base, contract.mission, map));
                        }         
                        
                    });
                }
                else{
                    alert('There is no contract matching with your request !');
                }  
            }
        });
    });
});
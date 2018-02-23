/* Function to add a new oil project */
function add_tender(path){
    
    emptyField('add_tender_name')
    emptyField('add_tender_comment');
    emptyField('add_tender_country');
    emptyField('add_tender_oil_company');
    emptyField('add_tender_base');
    emptyField('add_tender_tender_status');
    emptyField('add_tender_platforms');
    emptyField('add_tender_helicopter_category');
    emptyField('add_tender_helicopter_quantity');
    emptyField('platforms_sortable');
    
    $('.select2').selectpicker('refresh');
    
    $.ajax({
        url: path,
        type: "POST",
        dataType: 'json',
        success: function(data){
            
            forEachSelect(data['oilCompanies'], 'add_tender_oil_company');
            forEachSelect(data['countries'], 'add_tender_country');
            forEachSelect(data['bases'], 'add_tender_base');
            forEachSelect(data['projectStatus'], 'add_tender_status');
            forEachSelect(data['platforms'], 'add_tender_platforms');
            forEachSelect(data['manufacturers'], 'add_tender_helicopter_constructor');
            forEachSelect(data['helicopterCategories'], 'add_tender_helicopter_category');

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
    
    $('#'+id).html("");
    
}

$(document).ready(function(){
    
    var map = initialize();
    var markers = [];
    var polylinePath = [];
    var polylines = [];
    var response;
    
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
            url:        Routing.generate('_tenders_add'),
            type:       'POST',
            data:       $('#add_tender_form').serialize(),
            success:    function(data){
                $('#myModalFormContent').bootstrapWizard('show', 0);
                $('#bar').attr('class', 'progress-bar progress-bar-striped');
                if (!(data.indexOf("Error") !== -1)){
                    $('#tender_add_modal').modal('hide');
                }
                alert(data);
            }
        });
    });
    
    $('#add_tender_country').change(function(){
        $('#add_tender_base').html("");
        $.ajax({
            url:        Routing.generate('_search_bases'),
            type:       'POST',
            dataType:   'json',
            data:       $('#add_tender_country'),
            success:    function(data){
                var select = $('#add_tender_base');
                $.each(data, function(key, base){
                    select.append('<option value="'+base.id+'">'+base.name+'</option>');
                });
                select.selectpicker('refresh');
                
                emptyField('add_tender_platforms');
                $.ajax({
                    url:        Routing.generate('_search_platforms'),
                    type:       'POST',
                    dataType:   'json',
                    data:       $('#add_tender_country'),
                    success:    function(data){
                        var select = $('#add_tender_platforms');
                        $.each(data, function(key, platform){
                            select.append('<option value="'+platform.id+'">'+platform.name+'</option>');
                        });
                        select.selectpicker('refresh');
                    }
                });
            }
        });
    });
    
    // Prevent the submission of the form to find a tender when the "Add new tender" button is pressed
    $('#tender_add_btn').on('click', function(e){      
        e.preventDefault();      
    });
    
    $('.datepicker').datepicker();
    
    var tenderTable = $('#tender_result_table').DataTable({
        responsive: true,
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf'
        ]
    });
    
    var add_platforms_sortable = $('#platforms_sortable').sortable({
        update: function(event, ui) {
            var order = add_platforms_sortable.sortable("toArray");
            $('#add_tender_mission_order').val(order.join(","));
        }
    });
    
    $( "platforms_sortable" ).disableSelection();
    
    $('#add_tender_platforms').change(function(){
        $('.selectpicker').selectpicker('refresh');
        $('#platforms_sortable').html("");
        $.each($('select#add_tender_platforms option:selected'), function(){
            $('#platforms_sortable').append('<li class="ui-state-default" id="'+ $(this).val() +'"><span><i class="fa fa-random"></i> '+$(this).text()+'</span></li>');
        });
        $('#add_tender_mission_order').val(add_platforms_sortable.sortable("toArray").join(","));
    });
    
    $('#add_tender_helicopter_category').on('change', function(e){
        
        e.preventDefault();
        emptyField('add_tender_helicopter_quantity');
        
        if ($('select#add_tender_helicopter_category option:selected').length > 0){
            
            $.each($('select#add_tender_helicopter_category option:selected'), function(){
                
                $('#add_tender_helicopter_quantity').append('<label>'+ $(this).text() +'<label>');
                $('#add_tender_helicopter_quantity').append($('<input></input>').attr('name', $(this).text())
                                                                                .attr('type', 'number')
                                                                                .attr('min', '1')
                                                                                .attr('class', 'form-control'));
            });
            
        }
        else{
            emptyField('add_tender_helicopter_quantity');
        }
        
    });
    
    $('#tender_filter_btn').on('click', function(e){
        
        e.preventDefault();
        
        var i;
        
        tenderTable.clear();
        removeMarkers(allMarkers);
        removeMissions(polylines);
        var btn = $(this);
        
        $.ajax({
            url: Routing.generate('_tenders_search'),
            type: "POST",
            data: $('#tenderForm').serialize(),
            dataType: 'json',
            beforeSend: function(){
                btn.button('loading');
            },
            complete: function(){
                btn.button('reset');
            },
            success: function(data){
                tenderTable.clear().draw();
                
                if(data['empty'] != 1){
                    $.each(data, function(tenderKey, tender){
                        tenderTable.row.add({
                            0 : tender.area,
                            1 : tender.country,
                            2 : tender.name,
                            3 : tender.oilCompany,
                            4 : tender.base.name,
                            5 : tender.status,
                            6 : tender.tenderTiming,
                            7 : tender.summary,
                            8 : '<button class="btn btn-default btn-sm" onClick="openDetailWindow(Routing.generate(\'_tender_detail\', {id:'+tender.id+'}))" role="button"><i class="fa fa-folder"></i></button>'
                        }).draw();
                        
                        if (typeof tender.mission !== 'undefined'){
                            polylines.push(drawMissions(tender.base, tender.mission, map));
                        }
                        else{
                            allMarkers.push(drawMarker(tender.base, map));
                        }
                    });
                }
                else{
                    alert('There is no tender matching with your request !');
                }  
            }
        });
    });
});
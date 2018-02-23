function initializeMissionMap(){
    // Create an array of styles.
    var styles = [
        {
            featureType: "road",
            stylers: [
                { visibility: "off" }
            ]
        },{
            featureType: "poi",
            stylers: [
                { visibility: "off" }
            ]
        },{
            featureType: "administrative.province",
            stylers: [
                { visibility: "off" }
            ]
        }
    ];

    // Create a new StyledMapType object, passing it the array of styles,
    // as well as the name to be displayed on the map type control.
    var styledMap = new google.maps.StyledMapType(styles,
    {name: "Oil and Gas Activity"});

    $.ajax({
        url: Routing.generate('_contract_detail_map', {id: $('#id').val()} ),
        method: 'post',
        dataType: 'json',
        success: function(data){
            // Create a map object, and include the MapTypeId to add
            // to the map type control.
            var mapOptions = {
                disableDefaultUI: true,
                scaleControl: true,
                drawingMode: "Polygon",
                zoom:       5,
                minZoom:    3,
                maxZoom:    11,
                center:     new google.maps.LatLng(data.base.gps.lat, data.base.gps.lng),
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                }
            };
            var map = new google.maps.Map(document.getElementById('world-map'), mapOptions);
            
            missions = drawMissions(data.base, data.mission, map);
            
            if (typeof missions[0] !== 'undefined'){
                var mainMissionPath = missions[0].getPath();
                var distance = travelDistance(mainMissionPath);
                
                $('#mainMissionDistance').append(distance+" nm");
            }
            else{
                $('#mainMissionDistance').append($('<span></span>').attr('style', 'font-style: italic').text("No valid mission entered"));
            }

            //Associate the styled map with the MapTypeId and set it to display.
            map.mapTypes.set('map_style', styledMap);
            map.setMapTypeId('map_style');

            return map;
        }
    });

    
}

/* Function to edit a new oil contract */
function edit_contract(path){
    
    emptyField('edit_contract_operator');
    emptyField('edit_contract_oil_company');
    emptyField('edit_contract_country');
    emptyField('edit_contract_base');
    emptyField('edit_contract_comment');
    emptyField('edit_contract_helicopter_constructor');
    emptyField('edit_contract_helicopter_category');
    emptyField('edit_contract_helicopter_type');
    emptyField('edit_contract_helicopter_quantity'); 
    emptyField('edit_contract_contract_status');
    emptyField('edit_contract_start_date');
    emptyField('edit_contract_end_date');
    emptyField('edit_contract_options');
    emptyField('platforms_sortable');
    emptyField('edit_contract_mission_order');
    emptyField('edit_contract_summary');
    emptyField('edit_contract_comment');
    
    $('.select2').selectpicker('refresh');
    
    $.ajax({
        url: path,
        type: "POST",
        dataType: 'json',
        success: function(data){
            
            forEachSelect(data['oilCompanies'], 'edit_contract_oil_company');
            forEachSelect(data['operators'], 'edit_contract_operator');
            forEachSelect(data['countries'], 'edit_contract_country');
            forEachSelect(data['bases'], 'edit_contract_base');
            forEachSelect(data['projectStatus'], 'edit_contract_contract_status');
            forEachSelect(data['platforms'], 'edit_contract_platforms');
            forEachSelect(data['manufacturers'], 'edit_contract_helicopter_constructor');
            forEachSelect(data['helicopterCategories'], 'edit_contract_helicopter_category');
            $('#edit_contract_summary').val(data['project'].summary);
            $('#edit_contract_comment').val(data['project'].comment);
            $('#edit_contract_confidential_link').attr('placeholder', data['project'].confidentialLink);
            $('#edit_contract_external_link').attr('placeholder', data['project'].externalLink);

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
    
    var commentTable = $('#commentTable').DataTable({
        responsive: true
    });
    
    $('#platformsTable').DataTable({
        responsive: true
    });
    
    $('.datepicker').datepicker();
    
    $('#delete_project_btn').on('click', function(){
        
        if(confirm("Are you sure you want to delete this project ?\nInformation will be definitively lost."))
        $.ajax({
            url:        Routing.generate('_contract_delete', {id: $('#hiddenId').val() }),
            method:     'post',
            success:    function(msg){
                alert(msg);
                document.location.href = Routing.generate('_contracts');
            }
        });
        
    });
    
    $("#archive_contract_btn").on('click', function(e){
        e.preventDefault();
        
        if(confirm("Are you sure you want to archive this contract ?")){
            $.ajax({
                url:        Routing.generate('_contract_archive', {id: $('#hiddenId').val() }),
                method:     'post',
                success:    function(msg){
                    alert(msg);
                    location.reload();
                }
            });
        }
    });
    
    var add_platforms_sortable = $('#platforms_sortable').sortable({
        update: function(event, ui) {
            var order = add_platforms_sortable.sortable("toArray");
            $('#edit_contract_mission_order').val(order.join(","));
        }
    });
    
    $('#edit_contract_country').change(function(){
        $('#edit_contract_base').html("");
        $.ajax({
            url:        Routing.generate('_search_bases'),
            type:       'POST',
            dataType:   'json',
            data:       $('#edit_contract_country'),
            success:    function(data){
                var select = $('#edit_contract_base');
                $.each(data, function(key, base){
                    select.append('<option value="'+base.id+'">'+base.name+'</option>');
                });
                select.selectpicker('refresh');
                
                emptyField('edit_contract_platforms');
                $.ajax({
                    url:        Routing.generate('_search_platforms'),
                    type:       'POST',
                    dataType:   'json',
                    data:       $('#edit_contract_country'),
                    success:    function(data){
                        var select = $('#edit_contract_platforms');
                        $.each(data, function(key, platform){
                            select.append('<option value="'+platform.id+'">'+platform.name+'</option>');
                        });
                        select.selectpicker('refresh');
                    }
                });
            }
        });
    });
    
    $('#edit_contract_platforms').change(function(){
        $('.selectpicker').selectpicker('refresh');
        $('#platforms_sortable').html("");
        $.each($('select#edit_contract_platforms option:selected'), function(){
            $('#platforms_sortable').append('<li class="ui-state-default" id="'+ $(this).val() +'"><span><i class="fa fa-random"></i> '+$(this).text()+'</span></li>');
        });
        $('#edit_contract_mission_order').val(add_platforms_sortable.sortable("toArray").join(","));
    });
    
    $('#add_comment_comment').val("");
    
    $('#edit_contract_btn').on('click', function(e){
        e.preventDefault();
        edit_contract(Routing.generate('_contract_initializeForm', {id: $('#hiddenId').val() }));
        
    });
    
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
            url:        Routing.generate('_contract_edit', {id: $('#hiddenId').val() } ),
            type:       'POST',
            data:       $('#edit_contract_form').serialize(),
            success:    function(data){
                $('#myModalFormContent').bootstrapWizard('show', 0);
                $('#bar').attr('class', 'progress-bar progress-bar-striped');
                $('#contract_edit_modal').modal('hide');
                alert(data);
                location.reload();
            }
        });
    });
    
    $('#edit_contract_helicopter_constructor').on('change', function(e){
        e.preventDefault();
        
        if ($('select#edit_contract_helicopter_constructor option:selected').length > 0 
            || $('select#edit_contract_helicopter_category option:selected').length > 0){
            
            $.ajax({
            
                url: Routing.generate('_helicopter_find'),
                type: 'POST',
                dataType: 'json',
                data: {
                    'constructors': $('#edit_contract_helicopter_constructor').val(),
                    'categories': $('#edit_contract_helicopter_category').val()
                },
                success: function(data){
                    emptyField('edit_contract_helicopter_type');
                    emptyField('edit_contract_helicopter_quantity');
                    forEachSelect(data, 'edit_contract_helicopter_type');
                }

            });
            
        }
        else{
            emptyField('edit_contract_helicopter_type');
            emptyField('edit_contract_helicopter_quantity');
            $('#edit_contract_helicopter_type').selectpicker('refresh');
        }
        
    });
    
    $('#edit_contract_helicopter_category').on('change', function(e){
        
        e.preventDefault();
        
        if ($('select#edit_contract_helicopter_constructor option:selected').length > 0 
            || $('select#edit_contract_helicopter_category option:selected').length > 0){
        
            $.ajax({

                url: Routing.generate('_helicopter_find'),
                type: 'POST',
                dataType: 'json',
                data: {
                    'constructors': $('#edit_contract_helicopter_constructor').val(),
                    'categories': $('#edit_contract_helicopter_category').val()
                },
                success: function(data){
                    $('#edit_contract_helicopter_type').html("");
                    $('#edit_contract_helicopter_quantity').html("");
                    forEachSelect(data, 'edit_contract_helicopter_type');
                }

            });
        }
        else{
            emptyField('edit_contract_helicopter_type');
            emptyField('edit_contract_helicopter_quantity');
            $('#edit_contract_helicopter_type').selectpicker('refresh');
        }
        
    });
    
    $('#edit_contract_helicopter_type').on('change', function(e){
        
        e.preventDefault();
        
        $('#edit_contract_helicopter_quantity').html("");
        
        $.each($('select#edit_contract_helicopter_type option:selected'), function(){
            
            $('#edit_contract_helicopter_quantity').append('<label>'+ $(this).text() +'<label>');
            $('#edit_contract_helicopter_quantity').append($('<input></input>').attr('name', $(this).text())
                                                                                .attr('type', 'number')
                                                                                .attr('min', '1')
                                                                                .attr('class', 'form-control'));
            
        });
        
    });
    
    $('#add_comment_btn').on('click', function(e){
        
        e.preventDefault();
        
        var btn = $(this);
        
        $.ajax({
            
            url: Routing.generate('_contract_comment_add', {id: $('#id').val()} ),
            method: "post",
            dataType: "json",
            data: $('#commentForm').serialize(),
            beforeSend: function(){
                btn.button('loading');
            },
            complete: function(){
                btn.button('reset');
            },
            success: function(data){
                $('#add_comment_comment').val("");
                commentTable.row.add({
                    0 : data.user,
                    1 : data.content,
                    2 : data.date
                }).draw();
                alert(data.message);
            }
            
        });
        
    });
    
    initializeMissionMap();
    
});



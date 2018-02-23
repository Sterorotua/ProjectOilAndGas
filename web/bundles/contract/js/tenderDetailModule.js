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

/* Function to edit tender */
function edit_tender(path){
    
    emptyField('edit_tender_name')
    emptyField('edit_tender_comment');
    emptyField('edit_tender_country');
    emptyField('edit_tender_oil_company');
    emptyField('edit_tender_base');
    emptyField('edit_tender_tender_status');
    emptyField('edit_tender_platforms');
    emptyField('edit_tender_helicopter_category');
    emptyField('edit_tender_helicopter_quantity');
    emptyField('platforms_sortable');
    
    $('.select2').selectpicker('refresh');
    
    $.ajax({
        url: path,
        type: "POST",
        dataType: 'json',
        success: function(data){
            
            forEachSelect(data['oilCompanies'], 'edit_tender_oil_company');
            forEachSelect(data['countries'], 'edit_tender_country');
            forEachSelect(data['bases'], 'edit_tender_base');
            forEachSelect(data['projectStatus'], 'edit_tender_status');
            forEachSelect(data['platforms'], 'edit_tender_platforms');
            forEachSelect(data['helicopterCategories'], 'edit_tender_helicopter_category');

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
    
    $('.select2').selectpicker({
        actionsBox: true,
        liveSearch: true
    });
    
    $('.datepicker').datepicker();
    
    var add_platforms_sortable = $('#platforms_sortable').sortable({
        update: function(event, ui) {
            var order = add_platforms_sortable.sortable("toArray");
            $('#edit_tender_mission_order').val(order.join(","));
        }
    });
    
    $('#edit_tender_platforms').change(function(){
        $('.selectpicker').selectpicker('refresh');
        $('#platforms_sortable').html("");
        $.each($('select#edit_tender_platforms option:selected'), function(){
            $('#platforms_sortable').append('<li class="ui-state-default" id="'+ $(this).val() +'"><span><i class="fa fa-random"></i> '+$(this).text()+'</span></li>');
        });
        $('#edit_tender_mission_order').val(add_platforms_sortable.sortable("toArray").join(","));
    });
    
    $('#add_comment_comment').val("");
    
    $('#edit_tender_btn').on('click', function(){
        
        edit_tender(Routing.generate('_tender_initializeForm'));
        
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
            url:        Routing.generate('_tender_edit', {id: $('#hiddenId').val() } ),
            type:       'POST',
            data:       $('#edit_tender_form').serialize(),
            success:    function(data){
                $('#myModalFormContent').bootstrapWizard('show', 0);
                $('#bar').attr('class', 'progress-bar progress-bar-striped');
                $('#tender_edit_modal').modal('hide');
                alert(data);
                location.reload();
            }
        });
    });
    
    $('#edit_tender_helicopter_category').on('change', function(e){
        
        e.preventDefault();
        emptyField('edit_tender_helicopter_quantity');
        
        if ($('select#edit_tender_helicopter_category option:selected').length > 0){
            
            $.each($('select#edit_tender_helicopter_category option:selected'), function(){
                
                $('#edit_tender_helicopter_quantity').append('<label>'+ $(this).text() +'<label>');
                $('#edit_tender_helicopter_quantity').append($('<input></input>').attr('name', $(this).text())
                                                                                .attr('type', 'number')
                                                                                .attr('min', '1')
                                                                                .attr('class', 'form-control'));
            });
            
        }
        else{
            emptyField('edit_tender_helicopter_quantity');
        }
        
    });
    
    $('#edit_tender_helicopter_type').on('change', function(e){
        
        e.preventDefault();
        
        $('#edit_tender_helicopter_quantity').html("");
        
        $.each($('select#edit_tender_helicopter_type option:selected'), function(){
            
            $('#edit_tender_helicopter_quantity').append('<label>'+ $(this).text() +'<label>');
            $('#edit_tender_helicopter_quantity').append($('<input></input>').attr('name', $(this).text())
                                                                                .attr('type', 'number')
                                                                                .attr('min', '1')
                                                                                .attr('class', 'form-control'));
            
        });
        
    });
    
    $('#add_comment_comment').val("");
    
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
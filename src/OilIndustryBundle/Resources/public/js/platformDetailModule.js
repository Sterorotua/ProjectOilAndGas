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
        url: Routing.generate('_platform_detail_map', {id: $('#id').val()} ),
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
                center:     new google.maps.LatLng(data.gps.lat, data.gps.lng),
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                }
            };
            
            var map = new google.maps.Map(document.getElementById('world-map'), mapOptions);
            
            drawMarker(data, map);

            //Associate the styled map with the MapTypeId and set it to display.
            map.mapTypes.set('map_style', styledMap);
            map.setMapTypeId('map_style');

            return map;
        }
    });
   
}

function edit_platform(path){
    
    emptyField('edit_platform_oil_company');
    emptyField('edit_platform_base'); 
    emptyField('edit_platform_status');
    
    $('.select2').selectpicker('refresh');
    
    $.ajax({
        url: path,
        type: "POST",
        dataType: 'json',
        success: function(data){
            
            forEachSelect(data['oilCompanies'], 'edit_platform_oil_company');
            forEachSelect(data['bases'], 'edit_platform_base');
            forEachSelect(data['platformStatus'], 'edit_platform_status');
            if (data['platform'].refuellingOption === "Available"){
                $('#edit_platform_refuelling_option').iCheck('check');
            }
            else{
                $('#edit_platform_refuelling_option').iCheck('uncheck');
            }
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
    
    initializeMissionMap();
    
    $('#myModalFormContent').bootstrapWizard({
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
                } 
                else {
                    $('#myModalFormContent').find('.pager .next').show();
                    $('#bar').attr('class', 'progress-bar progress-bar-striped');
                    $('#myModalFormContent').find('.pager .finish').hide();
                }
            },
            onFinish: function() {
                $.ajax({
                    url:        Routing.generate('_platform_edit', {id: $('#hiddenId').val() } ),
                    type:       'POST',
                    data:       $('#edit_platform_form').serialize(),
                    success:    function(data){
                        $('#myModalFormContent').bootstrapWizard('show', 0);
                        $('#bar').attr('class', 'progress-bar progress-bar-striped');
                        $('#platform_edit_modal').modal('hide');
                        alert(data);
                        location.reload();
                    }
                });
            }
    });
    
    $('#edit_platform_btn').on('click', function(e){
        
        e.preventDefault();
        
        edit_platform(Routing.generate('_platform_initialize_form', {id: $('#hiddenId').val() }));
        
    });
    
});

/* Function to add a new oil project */
function add_project(path){
    
    emptyField('add_project_name')
    emptyField('add_project_comment');
    emptyField('add_project_country');
    emptyField('add_project_oil_company');
    emptyField('add_project_base');
    emptyField('add_project_project_status');
    emptyField('add_project_platforms');
    emptyField('add_project_helicopter_category');
    emptyField('add_project_helicopter_quantity');
//    initializeAddProjectMap();
    
    $('.select2').selectpicker('refresh');
    
    $.ajax({
        url: path,
        type: "POST",
        dataType: 'json',
        success: function(data){
            
            forEachSelect(data['oilCompanies'], 'add_project_oil_company');
            forEachSelect(data['countries'], 'add_project_country');
            forEachSelect(data['bases'], 'add_project_base');
            forEachSelect(data['projectStatus'], 'add_project_status');
            forEachSelect(data['helicopterCategories'], 'add_project_helicopter_category');

        }
    });
    
}

function initializeAddProjectMap() {
    
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
    
    // Create a map object, and include the MapTypeId to add
    // to the map type control.
    var mapOptions = {
        disableDefaultUI: true,
        scaleControl: true,
        drawingMode: "Polygon",
        zoom:       3,
        minZoom:    3,
        maxZoom:    11,
        center:     new google.maps.LatLng(43.6, 1.43),
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        }
    };
    var projectMap = new google.maps.Map(document.getElementById('add_project_area_map'), mapOptions);
    
    var drawingManager = new google.maps.drawing.DrawingManager({
        drawingMode: google.maps.drawing.OverlayType.MARKER,
        drawingControl: false
    });
    
    //Associate the styled map with the MapTypeId and set it to display.
    projectMap.mapTypes.set('map_style', styledMap);
    projectMap.setMapTypeId('map_style');
    drawingManager.setMap(projectMap);
    
    google.maps.event.addListener(drawingManager, 'markercomplete', function(event) {
        if (projectAddMapMarker != null){
            removeMarker(projectAddMapMarker);
            projectAddMapMarker = event;
            var coordinates = (projectAddMapMarker.getPosition());
            $('#add_project_longitude').val(coordinates.lng());
            $('#add_project_latitude').val(coordinates.lat()); 
        }
        else{
            projectAddMapMarker = event;
            var coordinates = (projectAddMapMarker.getPosition());
            $('#add_project_longitude').val(coordinates.lng());
            $('#add_project_latitude').val(coordinates.lat());
        }           
    });
    
    return projectMap;
    
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

var projectAddMapMarker;

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
            url:        Routing.generate('_projects_add'),
            type:       'POST',
            data:       $('#add_project_form').serialize(),
            success:    function(data){
                $('#myModalFormContent').bootstrapWizard('show', 0);
                $('#bar').attr('class', 'progress-bar progress-bar-striped');
                $('#project_add_modal').modal('hide');
                alert(data);
            }
        });
    });
    
    $('#project_add_modal').on('shown.bs.modal', function(){
        var projectAddMap = initializeAddProjectMap();
    });
    
    // Prevent the submission of the form to find a project when the "Add new project" button is pressed
    $('#project_add_btn').on('click', function(e){      
        e.preventDefault();
        $('#project_add_modal').modal("show");
    });

    $('.select2').selectpicker({
        actionsBox: true,
        liveSearch: true
    });
    
    $('.datepicker').datepicker();
        var projectTable = $('#project_result_table').DataTable({
        responsive: true
    });
    
    var add_platforms_sortable = $('#platforms_sortable').sortable({
        update: function(event, ui) {
            var order = add_platforms_sortable.sortable("toArray");
            $('#add_project_mission_order').val(order.join(","));
        }
    });
    
    $( "platforms_sortable" ).disableSelection();
    
    $('#add_project_platforms').change(function(){
        $('.selectpicker').selectpicker('refresh');
        $('#platforms_sortable').html("");
        $.each($('select#add_project_platforms option:selected'), function(){
            $('#platforms_sortable').append('<li class="ui-state-default" id="'+ $(this).val() +'"><span>'+$(this).text()+'</span></li>');
        });
        $('#add_project_mission_order').val(add_platforms_sortable.sortable("toArray").join(","));
    });
    
    $('#add_project_helicopter_category').on('change', function(e){
        
        e.preventDefault();
        emptyField('add_project_helicopter_quantity');
        
        if ($('select#add_project_helicopter_category option:selected').length > 0){
            
            $.each($('select#add_project_helicopter_category option:selected'), function(){
                
                $('#add_project_helicopter_quantity').append('<label>'+ $(this).text() +'<label>');
                $('#add_project_helicopter_quantity').append($('<input></input>').attr('name', $(this).text())
                                                                                .attr('type', 'number')
                                                                                .attr('min', '1')
                                                                                .attr('class', 'form-control'));
            });
            
        }
        else{
            emptyField('add_project_helicopter_quantity');
        }
        
    });
    
    $('#project_filter_btn').on('click', function(e){
        
        e.preventDefault();
        
        var i;
        
        projectTable.clear();
        removeMarkers(allMarkers);
        removeCircles(allCircles);
        removeProjects(polylines);
        var btn = $(this);
        
        $.ajax({
            url: Routing.generate('_projects_search'),
            type: "POST",
            data: $('#projectForm').serialize(),
            dataType: 'json',
            beforeSend: function(){
                btn.button('loading');
            },
            complete: function(){
                btn.button('reset');
            },
            success: function(data){
                projectTable.clear().draw();
                
                if(data['empty'] != 1){
                    $.each(data, function(projectKey, project){
                        projectTable.row.add({
                            0 : project.area,
                            1 : project.country,
                            2 : project.name,
                            3 : project.oilCompany,
                            4 : project.status,
                            5 : project.projectTiming,
                            6 : project.summary,
                            7 : '<button class="btn btn-default btn-sm" onClick="openDetailWindow(Routing.generate(\'_project_detail\', {id:'+project.id+'}))" role="button"><i class="fa fa-folder"></i></button>'
                        }).draw();
                        
                        if (typeof project.projectArea !== 'undefined'){
                            polylines.push(drawProject(project.base, project.projectArea, map));
                        }
                        else{
                            drawMissions(project.base, null, map);
                        }
                        
                    });
                }
                else{
                    alert('There is no project matching with your request !');
                }
            }
        });
    });
});
function edit_project(path){
    
    $('#edit_project_name').val("");
    emptyField('edit_project_comment');
    emptyField('edit_project_country');
    emptyField('edit_project_oil_company');
    emptyField('edit_project_base');
    emptyField('edit_project_project_status');
    emptyField('edit_project_platforms');
    emptyField('edit_project_helicopter_category');
    emptyField('edit_project_helicopter_quantity');
    $('#edit_project_geophysics_date').val("");
    $('#edit_project_licensing_date').val("");
    $('#edit_project_drilling_date').val("");
    $('#edit_project_discovery_date').val("");
    $('#edit_project_fid_date').val("");
    $('#edit_project_development_date').val("");
    $('#edit_project_operational_date').val("");
    $('#edit_project_confidential_link').val("");
    $('#edit_project_external_link').val("");
//    initializeAddProjectMap();
    
    $('.select2').selectpicker('refresh');
    
    $.ajax({
        url: path,
        type: "POST",
        dataType: 'json',
        success: function(data){
            
            forEachSelect(data['oilCompanies'], 'edit_project_oil_company');
            forEachSelect(data['countries'], 'edit_project_country');
            forEachSelect(data['bases'], 'edit_project_base');
            forEachSelect(data['projectStatus'], 'edit_project_status');
            forEachSelect(data['helicopterCategories'], 'edit_project_helicopter_category');
            $('#edit_project_summary').val(data['project'].summary);
            $('#edit_project_comment').val(data['project'].comment);
            $('#edit_project_level').attr('value', data['project'].projectLevel);
            $('#edit_project_geophysics_date').attr('placeholder', data['project'].geophysics);
            $('#edit_project_licensing_date').attr('placeholder', data['project'].licensing);
            $('#edit_project_drilling_date').attr('placeholder', data['project'].drilling);
            $('#edit_project_discovery_date').attr('placeholder', data['project'].discovery);
            $('#edit_project_fid_date').attr('placeholder', data['project'].fid);
            $('#edit_project_development_date').attr('placeholder', data['project'].development);
            $('#edit_project_operational_date').attr('placeholder', data['project'].operational);
            $('#edit_project_confidential_link').attr('placeholder', data['project'].confidentialLink);
            $('#edit_project_external_link').attr('placeholder', data['project'].externalLink);
            
        }
    });
    
}

function upgrade_project(path){
    emptyField('upgrade_project_name');
    emptyField('upgrade_project_summary');
    emptyField('upgrade_project_comment');
    emptyField('upgrade_project_status');
    emptyField('upgrade_project_platforms');
    emptyField('upgrade_project_tender_out');
    emptyField('upgrade_project_tender_closure');
    emptyField('upgrade_project_awarded');
    emptyField('upgrade_project_operations_start');
    
    $.ajax({
        url: path,
        type: "POST",
        dataType: 'json',
        success: function(data){
            
            forEachSelect(data['projectStatus'], 'upgrade_project_status');
            forEachSelect(data['platforms'], 'upgrade_project_platforms');
            forEachSelect(data['helicopterCategories'], 'upgrade_project_helicopter_category');

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
    var projectMap = new google.maps.Map(document.getElementById('edit_project_area_map'), mapOptions);
    
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
            $('#edit_project_longitude').val(coordinates.lng());
            $('#edit_project_latitude').val(coordinates.lat()); 
        }
        else{
            projectAddMapMarker = event;
            var coordinates = (projectAddMapMarker.getPosition());
            $('#edit_project_longitude').val(coordinates.lng());
            $('#edit_project_latitude').val(coordinates.lat());
        }           
    });
    
    return projectMap;
    
}

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
        url: Routing.generate('_project_detail_map', {id: $('#id').val()} ),
        method: 'post',
        dataType: 'json',
        success: function(data){
            // Create a map object, and include the MapTypeId to add
            // to the map type control.
            var mapCenter;
            var defaultZoom;
            
            if (data.base.gps.lat < 1000 && data.base.gps.lng < 1000){
                mapCenter = new google.maps.LatLng(data.base.gps.lat, data.base.gps.lng);
                defaultZoom = 5;
            }
            else{
                mapCenter = new google.maps.LatLng(0, 0);
                defaultZoom = 1;
            }
            
            var mapOptions = {
                disableDefaultUI: true,
                scaleControl: true,
                drawingMode: "Polygon",
                zoom:       defaultZoom,
                minZoom:    1,
                maxZoom:    11,
                center:     mapCenter,
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                }
            };
            var map = new google.maps.Map(document.getElementById('world-map'), mapOptions);
            
            if(typeof data.projectArea !== 'undefined'){
                
                missions = drawProject(data.base, data.projectArea, map);
                
                if (typeof missions !== 'undefined'){
                    var mainMissionPath = missions.getPath();
                    var distance = travelDistance(mainMissionPath);

                    $('#mainMissionDistance').append(distance+" nm");
                }
                else{
                    $('#mainMissionDistance').append($('<span></span>').attr('style', 'font-style: italic').text("No valid project area entered"));
                }
                
            }
            else{
                allMarkers.push(drawMarker(data.base, map));
            }

            //Associate the styled map with the MapTypeId and set it to display.
            map.mapTypes.set('map_style', styledMap);
            map.setMapTypeId('map_style');

            return map;
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

var projectAddMapMarker;

$(document).ready(function(){
    
    var commentTable = $('#commentTable').DataTable({
        responsive: true
    });
    
    $('#delete_project_btn').on('click', function(){
        
        if(confirm("Are you sure you want to delete this project ?\nInformation will be definitively lost."))
        $.ajax({
            url:        Routing.generate('_contract_delete', {id: $('#hiddenId').val() }),
            method:     'post',
            success:    function(msg){
                alert(msg);
                document.location.href = Routing.generate('_projects');
            }
        });
        
    });
    
    $("#archive_project_btn").on('click', function(e){
        e.preventDefault();
        
        if(confirm("Are you sure you want to archive this project ?")){
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
    
    $('.datepicker').datepicker();
    
    $('#add_comment_comment').val("");
    
    $('#upgrade_project_platforms').change(function(){
        $('.selectpicker').selectpicker('refresh');
        $('#platforms_sortable').html("");
        $.each($('select#upgrade_project_platforms option:selected'), function(){
            $('#platforms_sortable').append('<li class="ui-state-default" id="'+ $(this).val() +'"><span><i class="fa fa-random"></i> '+$(this).text()+'</span></li>');
        });
        $('#upgrade_project_mission_order').val(add_platforms_sortable.sortable("toArray").join(","));
    });
    
    $('#edit_project_country').change(function(){
        $('#edit_project_base').html("");
        $.ajax({
            url:        Routing.generate('_search_bases'),
            type:       'POST',
            dataType:   'json',
            data:       $('#edit_project_country'),
            success:    function(data){
                var select = $('#edit_project_base');
                $.each(data, function(key, base){
                    select.append('<option value="'+base.id+'">'+base.name+'</option>');
                });
                select.selectpicker('refresh');
            }
        });
    });
    
    var upgradeWizard = $('#upgradeProjectFormContent').bootstrapWizard({
            onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#upgrade_bar').css({width:$percent+'%'});

                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#upgradeProjectFormContent').find('.pager .next').hide();
                    $('#upgradeProjectFormContent').find('.pager .finish').show();
                    $('#upgrade_bar').attr('class', 'progress-bar progress-bar-success');
                    $('#upgradeProjectFormContent').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#upgradeProjectFormContent').find('.pager .next').show();
                    $('#upgrade_bar').attr('class', 'progress-bar progress-bar-striped');
                    $('#upgradeProjectFormContent').find('.pager .finish').hide();
                }
            },
            onFinish: function(){
                $.ajax({
                    url:        Routing.generate('_project_upgrade', {id: $('#hiddenId').val() }),
                    type:       'POST',
                    data:       $('#upgrade_project_form').serialize(),
                    success:    function(data){
                        $('#upgradeProjectFormContent').bootstrapWizard('show', 0);
                        $('#upgrade_bar').attr('class', 'progress-bar progress-bar-striped');
                        $('#project_upgrade_modal').modal('hide');
                        if (!(data.indexOf('Error') !== -1)){
                            alert(data);
                            document.location.href = Routing.generate('_tender_detail', {id: $('#hiddenId').val() });
                        }
                        else{
                            alert(data);
                        } 
                    }
                });
            }
    });
    
    var editWizard = $('#myModalFormContent').bootstrapWizard({
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
            },
            onFinish: function(){
                $.ajax({
                    url:        Routing.generate('_project_edit', {id: $('#hiddenId').val() }),
                    type:       'POST',
                    data:       $('#edit_project_form').serialize(),
                    success:    function(data){
                        $('#myModalFormContent').bootstrapWizard('show', 0);
                        $('#bar').attr('class', 'progress-bar progress-bar-striped');
                        $('#project_edit_modal').modal('hide');
                        alert(data);
                        location.reload();
                    }
                });
            }
    });
    
    $('#upgrade_project_btn').on('click', function(){
        upgrade_project(Routing.generate('_tender_initializeForm'));
    });
    
    $('#project_edit_btn').on('click', function(){      
        $('#project_edit_modal').modal("show");
    });
    
    $('#project_edit_modal').on('shown.bs.modal', function(){
        var projectAddMap = initializeAddProjectMap();
    });
    
    $('#edit_project_btn').on('click', function(){
        edit_project(Routing.generate('_project_initializeForm', {id: $('#hiddenId').val() }));
    });
    
    $('#edit_project_helicopter_category').on('change', function(e){
        
        e.preventDefault();
        emptyField('edit_project_helicopter_quantity');
        
        if ($('select#edit_project_helicopter_category option:selected').length > 0){
            
            $.each($('select#edit_project_helicopter_category option:selected'), function(){
                
                $('#edit_project_helicopter_quantity').append('<label>'+ $(this).text() +'<label>');
                $('#edit_project_helicopter_quantity').append($('<input></input>').attr('name', $(this).text())
                                                                                .attr('type', 'number')
                                                                                .attr('min', '1')
                                                                                .attr('class', 'form-control'));
            });
            
        }
        else{
            emptyField('edit_project_helicopter_quantity');
        }
        
    });
    
    var add_platforms_sortable = $('#platforms_sortable').sortable({
        update: function(event, ui) {
            var order = add_platforms_sortable.sortable("toArray");
            $('#upgrade_project_mission_order').val(order.join(","));
        }
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
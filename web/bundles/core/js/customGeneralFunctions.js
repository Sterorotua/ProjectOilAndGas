function initialize() {
    
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
    var map = new google.maps.Map(document.getElementById('world-map'), mapOptions);
    
    //Associate the styled map with the MapTypeId and set it to display.
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
    
    return map;
    
}

function drawProject(base, area, map){
    
    allMarkers.push(drawMarker(base, map));    
    allMarkers.push(drawMarker(area, map));
    
    var projectLine = [];
    
    projectLine.push(base.gps);
    projectLine.push(area.gps);
    
    return drawPolyline(projectLine, map);
    
}

function drawCircle(place, map){
    
    if (compteur%3 == 0){
        var color = '#000000';
    }
    else if (compteur%2 == 0){
        var color = '#FF0000';
    }
    else{
        var color = '#0000FF';
    }
    
    var placeCircle = new google.maps.Circle({
      strokeColor: color,
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: color,
      fillOpacity: 0.35,
      map: map,
      center: place.gps,
      radius: 50000
    });
    
    circleCompteur++;
    
    return placeCircle;
}

function drawMissions(base, missionList, map){
    
    var missions = [];
    
    allMarkers.push(drawMarker(base, map));
    
    $.each(missionList, function(key, mission){
        missions.push(drawMission(base, mission, map));
    });
    
    return missions;
}

function drawMission(base, mission, map){
    
    var sortPlatforms = [];
    var pathToDraw = [];
    
    $.each(mission, function(key, item){
        if (key !== 'ending'){
            sortPlatforms.push(item);           
        }
        else{     
            var ending = item;
        }
        allMarkers.push(drawMarker(item, map));
    });
    
    sortPlatforms.sort(function(a, b){
        return a.orderNumber - b.orderNumber;
    });
    
    pathToDraw.push(base.gps);
    $.each(sortPlatforms, function(key, item){
        pathToDraw.push(item.gps);
    });
    if (typeof ending !== 'undefined') {
        pathToDraw.push(ending.gps);
    }
    else{
        pathToDraw.push(base.gps);
    }
    
    mission = drawPolyline(pathToDraw, map);
    
    return mission;
    
}

/* Function to draw markers */
function drawMarker(pointOfInterest, map){
    
    if ('operatorGroup' in pointOfInterest){
        var infoWindow = new google.maps.InfoWindow({
            content: '<h3>' + pointOfInterest.name + '</h3>' +
                    '<br>Operator Group : ' + pointOfInterest.operatorGroup +
                    '<br>Country : ' + pointOfInterest.country
        });
        var marker = new google.maps.Marker({
            position: pointOfInterest.gps,
            icon: $('#helipad').attr('href'),
            map: map
        });
    }
    else if('refuellingOption' in pointOfInterest){
        if (pointOfInterest.bunkedBedNumber === null)
            var bedNumber = " - ";
        else{
            var bedNumber = pointOfInterest.bunkedBedNumber;
        }
        var infoWindow = new google.maps.InfoWindow({
            content: '<h3>' + pointOfInterest.name + '</h3>' + 
                    '<br>Oil Company : ' + pointOfInterest.oilCompany +
                    '<br>Helideck D-Value : ' + pointOfInterest.dValue +
                    '<br>Helideck T-Value : ' + pointOfInterest.tValue +
                    '<br>Bunked Bed Number : ' + bedNumber +
                    '<br>Refuelling : ' + pointOfInterest.refuellingOption +
                    '<br>Country : ' + pointOfInterest.country +
                    '<br><br><a href="#" onClick="openDetailWindow(Routing.generate(\'_platform_detail\', {id: ' + pointOfInterest.id + ' }, true))">More details...</a>'
        });
        var marker = new google.maps.Marker({
            position: pointOfInterest.gps,
            icon: $('#oilMarker').attr('href'),
            map: map
        });
    }
    else{
        var marker = new google.maps.Marker({
            position: pointOfInterest.gps,
            icon: $('#oilNGasArea').attr('href'),
            map: map
        });
    }
    
    marker.addListener('click', function() {
        infoWindow.open(map, marker);
    });
    
    return marker;
}

/* Function to draw lines between markers */
function drawPolyline(path, map){
    
    if (compteur%3 == 0){
        var color = '#301060';
    }
    else if(compteur%2 == 0){
        var color = '#FF0000';
    }
    else{
        var color = '#0000FF';
    }
    
    var polyline = new google.maps.Polyline({
        path: path,
        geodesic: true,
        strokeColor: color,
        strokeOpacity: 1.0,
        strokeWeight: 2
    });
    
    polyline.setMap(map);
    
    compteur++;
    
    return polyline;
}

function removeCircle(circle){
    circle.setMap(null);
}

function removeCircles(circles){
    $.each(circles, function(key, circle){
        removeCircle(circle);
    });
    allCircles = [];
}

function removeProjects(polylines){
    $.each(polylines, function(key, polyline){
        removePolyline(polyline);   
    });
    polylines.length = 0;
}

function removePolyline(polyline){
    polyline.setMap(null);
}

function removePolylines(polylines){
    
    $.each(polylines, function(key, polyline){
        removePolyline(polyline);    
    });

}

function removeMissions(missions){
    $.each(missions, function(key, polylines){
        removePolylines(polylines);
    });
    
    missions.length = 0;
}

function removeMarker(marker){
    marker.setMap(null);
}

function removeMarkers(markers){
    for (var i = 0; i < markers.length; i++){
        removeMarker(markers[i]);
    }
    markers = [];
}

function meterToNauticalMiles(distance){
    return Math.round((distance * 0.000539957)*100)/100;
}

/* Function to calculate distance of a trip */
function travelDistance(path){
    return meterToNauticalMiles(google.maps.geometry.spherical.computeLength(path));
}

function dump(obj) {
    var out = '';
    for (var i in obj) {
        out += i + ": " + obj[i] + "\n";
    }
    
    alert(out);

}

function openDetailWindow(path){
    window.open(path);
}

var compteur = 0;

var circleCompteur = 0;

var allMarkers = [];

var allCircles = [];
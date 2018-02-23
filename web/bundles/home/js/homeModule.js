function compareTo(platform1, platform2){
    return platform1.order - platform2.order;
}

function dump(obj) {
    var out = '';
    for (var i in obj) {
        out += i + ": " + obj[i] + "\n";
    }

    alert(out);
}

$(document).ready(function(){
    
    $('.select2').selectpicker({
        actionsBox: true,
        liveSearch: true
    });
    
    var map = initialize();
    
    $('#globalView').on('click', function(e){
        
        e.preventDefault();
        
        $.ajax({
            url: Routing.generate('_home_map'),
            dataType: "json",
            success: function(data){
                
                $.each(data, function(key, country){
                    alert(country.projectNumber);
                });
                
            }
        });
    });  
    
});

//var flightPathes = [];
//                var flightPath = [];
//                var sortedPlatforms = [];
//                var pathPolygon;
//
//                $.each(data, function(projectKey, project){
//                    
//                    drawMarker(project.base, 1, map);
//                    
//                    $.each(data[projectKey].mission, function(missionKey, mission){
//                        
//                        flightPath = [];
//                        pathPolygon = [];
//                        sortedPlatforms = [];
//                        
//                        flightPath.push(project.base.gps);
//                        
//                        $.each(mission, function(platformKey, platform){
//                            if (platformKey !== 'ending'){
//                                drawMarker(platform, 2, map);
//                                sortedPlatforms.push(platform);
//                            }
//                        }); 
//                        
//                        sortedPlatforms.sort(compareTo);
//                        
//                        for (i=0; i<sortedPlatforms.length; i++){
//                            flightPath.push(sortedPlatforms[i].gps);
//                        }
//                        
//                        if(mission.ending.gps !== project.base.gps){
//                            drawMarker(mission.ending, 1, map);
//                        }
//                        
//                        flightPath.push(mission.ending.gps);
//                        flightPathes.push(flightPath);
//                        
//                    });
//                });  
//                
//                for(i=0; i<flightPathes.length;i++){
//                    if (i!=0)
//                        removePolygon(pathPolygon);
//                    console.log(flightPathes[i]);
//                    pathPolygon = drawPolygon(flightPathes[i], map);
//                    console.log('Distance du parcours : ' + travelDistance(pathPolygon) + ' nm');
//                }



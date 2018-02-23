/* Function to add a new oil platform */

function add_platform(path){

    emptyField('add_platform');


    $('.select2').selectpicker('refresh');

    $.ajax({
        url: path,
        type: "POST",
        dataType: 'json',
        success: function(data){

            forEachSelect(data['Platform'], 'add_platform');
        }
    });

}

$(document).ready(function(){

    
    $('#platform_filter_btn').on('click', function(e){
        
        e.preventDefault();

        platformTable.clear();
        removeMissions(polylines);
        removeMarkers(allMarkers);
        var btn = $(this);

        $.ajax({
            url: Routing.generate('_platform_initialize_form'),
            type: "POST",
            data: $('#platformForm').serialize(),
            dataType: 'json',
            beforeSend: function(){
                btn.button('loading');
            },
            complete: function(){
                btn.button('reset');
            },
            success: function(data){
                platformTable.clear().draw();

                if(data['empty'] != 1){
                    $.each(data, function(platformKey, platform){
                        platformTable.row.add({
                            0 : platform.area,
                            1 : platform.country,
                            2 : platform.name,
                            3 : platform.oilCompany,
                            4 : platform.operator,
                            5 : platform.base.name,
                            6 : platform.status,
                            7 : platform.platformTiming,
                            8 : platform.summary,
                            9 : '<button class="btn btn-default btn-sm" onClick="openDetailWindow(Routing.generate(\'_platform_detail\', {id:'+platform.id+'}))" role="button"><i class="fa fa-folder"></i></button>'
                        }).draw();
                        if (typeof platform.mission !== 'undefined'){
                            polylines.push(drawMissions(platform.base, platform.mission, map));
                        }

                    });
                }
                else{
                    alert('There is no platform matching with your request !');
                }
            }
        });
    });
});

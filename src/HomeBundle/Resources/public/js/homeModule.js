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
    
    $('.datatable_table').DataTable({
        responsive: true
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


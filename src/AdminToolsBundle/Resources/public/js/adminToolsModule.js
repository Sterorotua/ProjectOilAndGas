$(document).ready(function(){
    
    var userTable = $('#user_table').DataTable({
        responsive: true
    });
    
    $('#add_airport_btn').on('click', function(e){
        e.preventDefault();
        
        $.ajax({
            url:        Routing.generate('_add_base'),
            method:     'post',
            data:       $('#add_base_form').serialize(),
            success: function(data){
                alert(data);
            }
        });
    });
    
    $('#add_business_area_btn').on('click', function(e){
        e.preventDefault();
        
        $.ajax({
            url:        Routing.generate('_add_business_area'),
            method:     'post',
            data:       $('#add_business_area_form').serialize(),
            success:     function(data){
                alert(data);
                if (data.indexOf("Error") < 0){
                    location.reload();
                }
            }
        });
    });
    
    $('#add_operator_group_btn').on('click', function(e){
        e.preventDefault();
        if (confirm("Are you sure that you want to add operator group called \"" + $('#add_operator_group_name').val() + "\" into database ?")){
            $.ajax({
                url:        Routing.generate('_add_operator_group'),
                method:     'post',
                data:       $('#add_operator_group_form').serialize(),
                success:     function(data){
                    alert(data);
                    if (data.indexOf("Error") < 0){
                        location.reload();
                    }
                }
            });
        }
    });
    
    $('#add_oil_company_btn').on('click', function(e){
        e.preventDefault();
        if (confirm("Are you sure that you want to add oil company called \"" + $('#add_oil_company_name').val() + "\" into database ?")){
            $.ajax({
                url:        Routing.generate('_add_oil_company'),
                method:     'post',
                data:       $('#add_oil_company_form').serialize(),
                success:     function(data){
                    alert(data);
                    if (data.indexOf("Error") < 0){
                        location.reload();
                    }
                }
            });
        }
    });
    
    $('#user_edit_form_btn').on('click', function(e){
        e.preventDefault();
        
        $.ajax({
            url:    Routing.generate('_attribute_business_area'),
            method: 'post',
            data:   $('#user_edit_form').serialize(),
            success: function(msg){
                alert(msg);
                location.reload();
            }
        });
    });
    
});
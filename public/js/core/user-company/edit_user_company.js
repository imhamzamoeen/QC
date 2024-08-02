function EditModal(object){

    my_companies=JSON.parse(object.companies)

    $('#select2-edit-user').html('');
    $('#select2-edit-companies').html('');


    $('#edituserrtocompanymodal input[type=radio]').each(function(){
        if($(this).val()==object.filter_check){
            $(this).prop("checked", true);
        }
       });
  
    //add user option to the select 
    var html_to_add='<option value='+object.user.id+'>'+object.user.name+':'+object.user.email+'</option>';
    $('#select2-edit-user').append(html_to_add);
    html_to_add='';
    var check='';
    $.ajax({
        type: "get",
        url: route_to_get_companies,
        data: {},
        dataType: "json",
        success: function (response) {
            $.each(response.response.data, function(key, value) {
                var result=my_companies.includes(value.existance_name);
                if(result==true){
              
                    check='selected';
                }else{
                    check='';
                }
                $('#select2-edit-companies').append(
                    '<option '+check+'  value='+value.existance_name+'>'+value.existance_name+':'+value.name+'</option>'
                );
              
              });
  
            $('#select2-edit-companies').append(html_to_add);
        },
        error:function(response){
            companies_for_edit_failed(response);
        }
    });
  

  
    $('#edituserrtocompanymodal').modal('show');
}

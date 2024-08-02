$('.company_select').change(function (e) { 
    html_to_add='<option value="" disabled selected>Choose policy</option>'
var company_id=$('#companiesNameSelect').val();


$.each(my_policies, function (indexInArray, valueOfElement) {  
    if(valueOfElement['id']==company_id){
        function_name=valueOfElement['func_name'];
        //Found the company that is choosen 
        $.each(my_policies[indexInArray]['policy'], function (index, value) { 
        
            html_to_add+='<option value="'+value['id']+'"  >'+value['policy_name']+'</option>';
        });
    }   
});
    $('#policy_select').html(html_to_add);
    
});
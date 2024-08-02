$('.second_next_button').click(function (e) { 
    e.preventDefault();
    var company_id=$('#companiesNameSelect').val();
    // console.log(company_id);
    var which_div=$('#UpdateOptionSelect').val();
    // console.log(which_div);


    formdata=new FormData();
    formdata.append('type',which_div);
    formdata.append('company_id',company_id);

    Ajax_Call_Dynamic_html(route_to_ajax, "POST", formdata, "div_change_success", "div_change_success");

    
});

function div_change_success(response){
$('.'+$('#UpdateOptionSelect').val()+'_display').html(response);
// repeater_initialize();


if($('#UpdateOptionSelect').val()=="formula"){
    Select2Reinitalize();
    Annual_add_option_to_select();
    Semi_Annual_add_option_to_select();
    Quarterly_add_option_to_select();
    Monthly_add_option_to_select();
    Annual_Term_add_option_to_select();
    Semi_Annual_Term_add_option_to_select();
    Quarterly_Term_add_option_to_select();
    Monthly_Term_add_option_to_select();
} 
}


$('.company-select').change(function (e) { 
    e.preventDefault();
     
    var formData = new FormData();

    formData.append('company_name', $('#Company').val())
   


    Ajax_Call_Dynamic(get_policy_type_route, "post", formData, "PolicyTypeSucces", 'PolicyTypeFail'); //yeh bad mai jab db s data aaye ga fir add krein gay 
    
});



function PolicyTypeSucces(response) {

    $('#policy_type').html('<option  >Choose a Level</option>');
    response.response.data.forEach(element => {

        $('#policy_type').append(

            '<option value="' + element.policy_type + '">' + element.policy_type + '</option>'
        );
    });
}


function PolicyTypeFail(response) {
    printerror(response);
    $('#policy_type').html(

        '<option disabled>No options Available</option>'
    );
}

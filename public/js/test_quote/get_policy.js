$('#policy_level').change(function (e) { 
    e.preventDefault();
    if($('#Company').val()=='Senior'){

    var formData = new FormData();
    formData.append('cateogry', $('#policy_type').val())
    


    Ajax_Call_Dynamic(senior_get_types, "post", formData, "seniortypesuccess", 'seniortypefail'); //yeh bad mai jab db s data aaye ga fir add krein gay 

    }
     else{
    var formData = new FormData();
    formData.append('policy_type', $('#policy_type').val())
    formData.append('company_name', $('#Company').val())
    formData.append('level', $('#policy_level').val())


    Ajax_Call_Dynamic(sub_cateogry_route, "post", formData, "SubCateogrySuccess", 'SubCateogryFail'); //yeh bad mai jab db s data aaye ga fir add krein gay 
     }
    
});


function SubCateogrySuccess(response) {
    $('.select2-selection__choice').remove();
    $('#sub_policy_type').html('<option disabled>Choose a sub Type</option>');
    response.response.data.forEach(element => {

        $('#sub_policy_type').append(

            '<option value="' + element.id + '">' + element.policy_name + '</option>'
        );
    });
}


function SubCateogryFail(response) {
    printerror(response);
    $('#sub_policy_type').html(

        '<option disabled>No options Available</option>'
    );
}



function seniortypesuccess(response) {
    // $('.select2-selection__choice').remove();
    $('#sub_policy_type').html('<option disabled>Choose a sub Type</option>');
    response.response.data.forEach(element => {

        $('#sub_policy_type').append(

            '<option value="' + element.id + '">' + element.sub_category_name + '</option>'
        );
    });
}


function seniortypefail(response) {
    printerror(response);
    $('#sub_policy_type').html(

        '<option disabled>No options Available</option>'
    );
}

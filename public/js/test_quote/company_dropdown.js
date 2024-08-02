//state change ho tu company aaye

$('.state-dropdown').change(function (e) { 
    e.preventDefault();
        var CountryStateFormData= new FormData();
        CountryStateFormData.append('state_id',$(this).val())
   

        Ajax_Call_Dynamic(route_to_get_company_from_state,"POST",CountryStateFormData,"CompanyStateSuccessFuntion","CompanyStateFailedFunction")
        

});

function CompanyStateSuccessFuntion(response){
    // console.log(response);
    html_to_add = '';
    quote = "'";
    $('.company-select').html('<option disabled selected>Choose company</option>');
    response.response.data.forEach(element => {
        html_to_add+='<option value='+element.company+'>'+element.company+'</option>';
    });

    $('.company-select').append(html_to_add);

}

function CompanyStateFailedFunction(response){
    if(response.status==409){
        toastr["error"](response.responseJSON.response, response.responseJSON.message, {
            closeButton: true,
            tapToDismiss: false,
            progressBar: true,
            // rtl: isRtl,
        });
  }
  else{
    $.each(response.responseJSON.errors, function (key, name) {
      toastr["error"](name, key, {
          closeButton: true,
          tapToDismiss: false,
          progressBar: true,
          // rtl: isRtl,
      });
  });
  }
     
}


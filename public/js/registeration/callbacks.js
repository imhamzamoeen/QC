function RegisterSuccess(response){
  Ajax_Call_Dynamic_html(route_to_get_users,'get',"nothing","editUserSuccess","editUserFailed");
    // console.log(response);
      Swal.fire({
        icon: 'success',
        title: 'User Created!',
        text: 'Email:'+response.response.data.email+', password:'+response.response.data.password,
        customClass: {
          confirmButton: 'btn btn-success'
        }
      });

      $('#register-additional-detail-form').trigger('reset');
      $('#register-user-personal-detail-form').trigger('reset');
      modernVerticalWizard = document.querySelector('.modern-vertical-wizard-example');
      var modernVerticalStepper = new Stepper(modernVerticalWizard);
      modernVerticalStepper.previous();
    maketableagain();


}
function RegisterFailed(response){
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


function maketableagain(){
  $('.datatables-conf').DataTable();
}
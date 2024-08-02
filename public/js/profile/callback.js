function ProfileUpdateSuccess(response) {

    toaster("success",response.response,"Profile Update");
    $("#ProifleUpdateForm").trigger('reset')

    console.log(formdata.get('name'));
    if (formdata.get('name') != null) {
        $('.user_name').html(formdata.get('name'));
    }
    if (formdata.get('email') != null) {
        $('.user_email').html(formdata.get('email'));
    }
  
}


$(document).ready(function () {
    
    setTimeout(function() {   $("#ProifleUpdateForm").trigger('reset')
    ; }, 3000);
});
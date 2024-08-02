function Edit_User(obj){

    $('.edit-user-img').attr("src", asset+'images/users/'+obj.user_attributes.image);
    $('.edit-user-name').val(obj.name);
    $('.edit-user-email').val(obj.email);
    $('.edit-user-id').val(obj.id);

    $('#user_type option[value='+obj.user_attributes.user_type+']').attr('selected','selected');
    $('#user_status option[value='+obj.user_attributes.status+']').attr('selected','selected');

 $('#select2-user_type-container').text(obj.user_attributes.user_type);  
 $('#select2-user_status-container').text(obj.user_attributes.status); 

    $('#editUser').modal('show');
}
$('#editUserForm').submit(function (e) { 
  e.preventDefault();

  var formdata=new FormData($(this)[0]);
  var method=$(this).attr('method');
  var action=$(this).attr('action');
  // Ajax_Call_Dynamic_html(action,method,formdata,"editUserSuccess","editUserFailed")

  swal_ask('Update User', 'Update User info details', 'warning', 'yes, please update', 'Error', 'Action Stopped', 'info','Ajax_Call_Dynamic_html', action,method,formdata,"editUserSuccess","editUserFailed");
       
  $('#editUser').modal('hide');
});




function delete_User(user_id){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        customClass: {
          confirmButton: 'btn btn-primary',
          cancelButton: 'btn btn-outline-danger ms-1'
        },
        buttonsStyling: false
      }).then(function (result) {
        if (result.value) {
         
          var formdata=new FormData();
          formdata.append('user_id',user_id)
            Ajax_Call_Dynamic_html(route_to_del_user,'POST',formdata,"editUserSuccess","editUserFailed");
          // Swal.fire({
          //   icon: 'success',
          //   title: 'Deleted!',
          //   text: 'Nikaal bhr kia usko Boss 😎.',
          //   customClass: {
          //     confirmButton: 'btn btn-success'
          //   }
          // });

         
       
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: 'Cancelled',
            text: 'User is Safe  😇 ',
            icon: 'error',
            customClass: {
              confirmButton: 'btn btn-success'
            }
          });
        }
      });
}


function editUserSuccess(response_html){
  
      toastr["info"]( "Users table updated 🧛‍♀️","Opearation", {
        closeButton: true,
        tapToDismiss: false,
        progressBar: true,
        // rtl: isRtl,
    });
  // console.log(response_html);
  $('#user_table_div').html(response_html);
  maketableagain();
}

function editUserFailed(response){

  // console.log(response);
    // toastr["error"]("Opearation", "Systen could not process the request", {
    //     closeButton: true,
    //     tapToDismiss: false,
    //     progressBar: true,
    //     // rtl: isRtl,
    // });
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
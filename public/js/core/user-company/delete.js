function Delete(id) {

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, take that companies back!',
        customClass: {
            confirmButton: 'btn btn-primary',
            cancelButton: 'btn btn-outline-danger ms-1'
        },
        buttonsStyling: false
    }).then(function (result) {
        if (result.value) {

            toastr["info"]("We are processing your request !", "👋 Please wait ...", {
                closeButton: true,
                tapToDismiss: false,
                progressBar: true,
            });
            Ajax_Call_Dynamic(
                '/UserManagment/Company-User/'+id,
                'delete',
                {},
                "user_company_delete_success",
                "user_company_delete_failed"
            );

        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: 'Cancelled',
                text: 'Your Action is stopped :)',
                icon: 'error',
                customClass: {
                    confirmButton: 'btn btn-success'
                }
            });
        }
    });
}


function user_company_delete_success(response){
    // var table = $('.ic-table').DataTable();
   
    var row = $("#" + response.response.data.id);
       $(".ic-table").dataTable().fnDeleteRow(row); 
       toaster('success',response.message,'result')
// console.log(response);

}

function user_company_delete_failed(response){
    FailedToasterResponse(response);
}
var global_obj;

$('#usercompanyaddform').submit(function (e) {

    e.preventDefault();
    if ($(this).valid()) {
        action = $(this).attr("action");
        method = $(this).attr("method");
        formdata = new FormData($(this)[0]);
        Swal.fire({
            title: 'Company User Management',
            text: 'Are you sure?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonText: 'Yes Assign',
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
                    action,
                    method,
                    formdata,
                    "user_company_assign_success",
                    "user_company_assign_failed"
                );
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire({
                    title: 'Stop',
                    text: 'Don not Assign',
                    icon: 'error',
                    customClass: {
                        confirmButton: 'btn btn-success'
                    }
                });
            }
        });

    }

});


function user_company_assign_success(response) {
    // console.log(response);
    toaster('success', response.message, 'result')
    // console.log(response);
    global_obj = response.response.data[0];


    //    alert( $(".ic-table").length)
    html_for_li = '';
    quote = "'";
    var data = JSON.parse(response.response.data[0].companies);
    $.each(data, function (key, value) {
        html_for_li += '<li>' + value + '</li>';
    });


    var dTable = $('.ic-table').DataTable();
    var old_data = dTable.row('#' + response.response.data[0].id).data();

    // console.log(old_data);
    if (old_data != undefined) {

        $('.ic-table').dataTable().fnUpdate([
            old_data[0],
            '<img src="' + asset + 'images/users/' + response.response.data[0].user.user_attributes.image + '" style="width:75px;height:75px;border-radius:50%">',
            response.response.data[0].user.name + ':' + response.response.data[0].user.email,
            html_for_li,
            '<button onclick="EditModal(global_obj)" class="btn btn-primary  text-nowrap add-new-role "> Edit</button>',
            '<button onclick="Delete(' + quote + response.response.data[0].id + quote + ')" class="btn btn-primary  text-nowrap add-new-role ">Delete</button>',
        ], '#' + response.response.data[0].id, undefined, false);
     
    } else {
        dTable.row.add([
            $(".ic-table").length,
            '<img src="' + asset + 'images/users/' + response.response.data[0].user.user_attributes.image + '" style="width:75px;height:75px;border-radius:50%">',
            response.response.data[0].user.name + ':' + response.response.data[0].user.email,
            html_for_li,
            '<button onclick="EditModal(global_obj)" class="btn btn-primary  text-nowrap add-new-role"> Edit</button>',
            '<button onclick="Delete(' + quote + response.response.data[0].id + quote + ')" class="btn btn-primary  text-nowrap add-new-role">Delete</button>',
        ]).node().id = response.response.data[0].id;
        dTable.draw();
      
    }





    $('#adduserrtocompanymodal').modal('hide');
    $('#usercompanyaddform').trigger("reset");
    $('.select2-selection__choice').remove();


}

function user_company_assign_failed(response) {
    FailedToasterResponse(response);
}

$("#usercompanyaddform").submit(function (e) {
    e.preventDefault();

    if ($(this).valid()) {
        var formdata = new FormData($(this)[0]);
        var action = "PolicyManagement/" + formdata.get('policy_id');
        var method = "POST";
        swal_ask('Update Policy', 'Update Policy info details', 'warning', 'yes, please update', 'Error', 'Action Stopped', 'info', 'Ajax_Call_Dynamic', action, method, formdata, "policy_managment_success", "FailedToasterResponse");
        return;
    } else {
        toaster('info', 'Update Request', 'Something Wrong With Form Data');
    }


});


function policy_managment_success(response) {
    toaster('success', 'Update Request', response.message);
    // console.log(response);

    // global_obj=response.response.data[0];

    global_obj.length = 0;
    global_obj.push(response.response.data[0]);


    var table = $('.ic-table').DataTable();
    var old_data = table.row('#' + response.response.data[0].id).data();


    $('.ic-table').dataTable().fnUpdate([
        old_data[0],
        response.response.data[0].company.name,
        response.response.data[0].policy_name,
        response.response.data[0].level,
        response.response.data[0].policy_type,
        '<button onclick="EditModal(' + 0 + ')" class="btn btn-primary text-nowrap add-new-role "> Edit </button>',
        '<a target="_blank" rel="noopener noreferrer" href="/PolicyManagement/CheckRates/'+response.response.data[0].policy_name+'" class="btn btn-primary  text-nowrap  ">Check Rates</a>',
    ], '#' + response.response.data[0].id, undefined, false);

    $('#editpolicymanagmentmodal').modal('hide');
}

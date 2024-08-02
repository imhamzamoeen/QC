$('#rolePermissionForm').submit(function (e) { 
    e.preventDefault();
    var formdata=new FormData($(this)[0]);
    var method=$(this).attr('method');
    var action=$(this).attr('action');
    Ajax_Call_Dynamic(action,method,formdata,"rolepermissionsuccess","rolepermissionfailed")
 
});

function rolepermissionsuccess(response){
    // console.log(response)
    toastr["success"]("Permissions assigned to role Successfully","Role to Permission",  {
        closeButton: true,
        tapToDismiss: false,
        progressBar: true,
        // rtl: isRtl,

    });
    var link = "";
    var quote = "'";
    $("#role_per_table").dataTable().fnClearTable();
    var t = $("#role_per_table").DataTable();
    // console.log(response);
    $.each(response.result, function (key, name) {
        $.each(name.permissions, function (key, name1) {
            link =
                "<tr><td></td>" +
                " <td>" +
                name.name +
                "</td>" +
                " <td>" +
                name1.name +
                "</td>" +
                "</td>" +
                "<td >" +
                '<button type="button" onclick="DelRolToPer(' +
                quote +
                name.id +
                quote +
                "," +
                quote +
                name1.name +
                quote +
                ')" class="btn btn-relief-danger">Delete</button>' +
                "  </td> " +
                " </tr>";
            t.rows.add($(link)).draw();
        });
    });
    $('#addRoleToPermissionModal').modal('hide');
}

function rolepermissionfailed(response){
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
    // console.log(response)
}


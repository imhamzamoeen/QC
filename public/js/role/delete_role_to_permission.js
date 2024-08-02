function DelRolToPer(role_id,permission_name){
    var formdata=new FormData();
    formdata.append('role_id',role_id)
    formdata.append('permission_name',permission_name)


    Ajax_Call_Dynamic(route_to_delete_role_to_permission,"POST",formdata,"rolepermissiondeletesuccess","rolepermissiondeletefailed")
}
function rolepermissiondeletesuccess(response){
   
    toastr["success"]("Permissions UnAssigned to role Successfully","Role to Permission",  {
        closeButton: true,
        tapToDismiss: false,
        progressBar: true,
        // rtl: isRtl,

    });
    var link = "";
    var quote = "'";
    $("#role_per_table").dataTable().fnClearTable();
    var t = $("#role_per_table").DataTable();
    console.log(response);
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
    
}

function rolepermissiondeletefailed(response){
    toastr["info"]("Failed to UnAssign Permission to role","Role to Permission",  {
        closeButton: true,
        tapToDismiss: false,
        progressBar: true,
        // rtl: isRtl,

    });
}
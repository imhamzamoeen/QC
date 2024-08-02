$("body").on("click", ".delete", function () {
    var id = $(this).data("id");
    var table = $(this).data("table");
    Swal.fire({
        title: "Are you sure to delete ?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: "btn btn-outline-danger ms-1",
        },
        buttonsStyling: false,
    }).then(function (result) {
        if (result.value) {
            // ajax
            $.ajax({
                type: "DELETE",
                url: window.location.href + "/" + id,
                dataType: "json",
                success: function (response) {
                    makeToaster(
                        "success",
                        response.response + " 👌",
                        "Action Successful!"
                    );
                    var oTable = $("." + table).DataTable();
                    oTable.draw();
                },
                error: function (response) {
                    makeToaster(
                        "error",
                        response.response + " 😭",
                        "Action Failed"
                    );
                },
            });
        }
    });
});

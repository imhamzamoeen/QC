$("#company-state-addition-form").submit(function (e) {
    e.preventDefault();
    var formdata = new FormData($(this)[0]);
    var action = $(this).attr('action');
    var method = $(this).attr('method');
    if ($(this).valid())
        Ajax_Call_Dynamic(action, method, formdata, "CompanyAdd_Success", "FailedToasterResponse")
});

function CompanyAdd_Success(response) {

    $("#company-state-addition-form").trigger('reset');
    toastr["success"](response.message, 'Success', {
        closeButton: true,
        tapToDismiss: false,
        progressBar: true,
        // rtl: isRtl,
    });
}

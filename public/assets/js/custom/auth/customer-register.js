$("#CustomerRegistrationForm").submit(function (e) {
    e.preventDefault();
    if ($(this).valid()) {
        // $(".register-btn").prop("disabled", true);
        // $(".register-btn-inner").html("Registering Agency ...");
        // $(".register-spinner").show();
        toastr["info"]("We are creating your account !", "👋 Please wait ...", {
            closeButton: true,
            tapToDismiss: false,
            progressBar: true,
        });
        dynamicAjax(
            $(this).attr("action"),
            $(this).attr("method"),
            new FormData($(this)[0]),
            "ajaxResponseRegister",
            "customer-errors-print"
        );
    }
});

function successMessage(response, url) {
    makeToaster(
        "success",
        "😃 Yeepii! you have created a new customer !",
        "The user with email : " +
            response.email +
            "will be notified via email soon !"
    );
}

$("#AgencyRegistrationForm").submit(function (e) {
    e.preventDefault();
    if ($(this).valid()) {
        $(".register-btn").prop("disabled", true);
        $(".register-btn-inner").html("Registering Agency ...");
        $(".register-spinner").show();
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
            "agency-errors-print"
        );
    }
});

var prefixMask = $("#agencyWebsite");

if (prefixMask.length) {
    new Cleave(prefixMask, {
        prefix: "https://",
    });
}

function successMessage(response) {
    makeToaster("success", "😃 Yeepii! Successful !", response.response);
    response.redirect
        ? setTimeout(() => {
            //   window.location.href = response.url;
          }, 2000)
        : "";
    removeLoader();
}

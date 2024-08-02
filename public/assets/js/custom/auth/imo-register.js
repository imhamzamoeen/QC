$("#IMORegistrationForm").submit(function (e) {
    e.preventDefault();
    $(this).validate({
        rules: {
            first_name: {
                noSpace: true,
                lettersonly: true,
            },
            last_name: {
                noSpace: true,
                lettersonly: true,
            },
        },
        messages: {
            first_name: {
                lettersonly: "No digits or special characters allowed...",
                noSpace: "We dont allow space in name",
            },
            last_name: {
                lettersonly: "No digits or special characters allowed...",
                noSpace: "We dont allow space in name",
            },
        },
    });
    if ($(this).valid()) {
        // $(".register-btn").prop("disabled", true);
        // $(".register-btn-inner").html("Registering IMO ...");
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
            "imo-errors-print"
        );
    }
});

function successMessage(response) {
    makeToaster("success", "😃 Yeepii! Successful !", response.response);
    response.redirect
        ? setTimeout(() => {
              window.location.href = response.url;
          }, 2000)
        : "";
    removeLoader();
}

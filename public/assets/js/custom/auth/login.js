// JS for Login
$().ready(function () {
    $.validator.addMethod("email", function (value, element) {
        return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value);
    }, "Email Address is invalid: Please enter a valid email address.");
});

$("#LoginForm").submit(function (e) {
    e.preventDefault();
    if ($(this).valid()) {
        $(".login-btn").prop("disabled", true);
        $(".login-btn-inner").html("Logging In...");
        $(".login-spinner").show();
        toastr["info"](
            "We are trying to log you into the system !",
            "👋 Please wait ...", {
                closeButton: true,
                tapToDismiss: false,
                progressBar: true,
            }
        );
        this.submit();
    }
});

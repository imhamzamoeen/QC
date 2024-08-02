$('#Register_form').submit(function (e) {
    e.preventDefault();
    if ($(this).valid()) {
        var data = new FormData($(this)[0]);
        $(".register-btn").prop("disabled", true);
        $(".register-btn-inner").html("Registering...");
        $(".login-spinner").show();
        toastr["info"](
            "Jarvis is trying to register this to our system !",
            "👋 Please wait ...", {
                closeButton: true,
                tapToDismiss: false,
                progressBar: true,
            }
        );
        alert($(this).attr('action'));
        dynamicAjax1($(this).attr('action'), $(this).attr('method'), data, "FilterSuccessFuntion", "FilterFailedFunction")
    }
  
});


function FilterSuccessFuntion(response) {
    alert('in success')
    // console.log(response);
}


function FilterFailedFunction(response) {
    alert('in failed')
    // console.log(response);
}

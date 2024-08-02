$("#addNewCompanyForm").submit(function (e) {
    e.preventDefault();
    if ($(this).valid()) {
        addLoader('loader-btn', 'Adding Company');
        toastr["info"]("We are processing your request !", "👋 Please wait ...", {
            closeButton: true,
            tapToDismiss: false,
            progressBar: true,
        });
        dynamicAjax(
            $(this).attr("action"),
            $(this).attr("method"),
            new FormData($(this)[0]),
            "companyCB",
            "errors-print"
        );
    }
});

function companyCB(response, errorClassName, className = 'loader-btn') {
    // console.log('response from call back');
    // console.log(response);
    if (response.status == 422)
        validationPrint(response, errorClassName, className, 'Add Company');
    else if (response.status == 200) {
        successMessage(response, className, 'Add Company');
        successFlow2(errorClassName, response.response);
    } else exceptionErrorHandling(errorClassName, response, className, 'Add Company');

}
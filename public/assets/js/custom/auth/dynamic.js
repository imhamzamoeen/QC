function ajaxResponseRegister(response, errorsClassName) {
    // console.log("response from callback");
    // console.log(response);
    var showHideErrors = $("." + errorsClassName);
    if (response.status == 200) {
        showHideErrors.fadeOut("slow");
        setTimeout(() => {
            successFlow(showHideErrors, response.response);
        }, 500);
        successMessage(response);
    } else if (response.status == 422) {
        var html =
            '<div class="mb-4">' +
            "<strong>Whoops! Something went wrong.</strong>" +
            '<ul class="mt-1 list-disc list-inside text-sm text-danger ul-class">';
        $.each(
            response.responseJSON.errors,
            function (indexInArray, valueOfElement) {
                makeToaster(
                    "error",
                    "😥 Oops! Something went wrong !",
                    valueOfElement
                );
                html += "<li>" + valueOfElement + "</li>";
            }
        );
        html += "</ul></div>";
        errorFlow(showHideErrors, html);
        removeLoader();
    } else {
        removeLoader();
        showHideErrors.html("");
        makeToaster(
            "error",
            "😧 " + response.responseJSON.message,
            "Oops! " + response.responseJSON.response + " !"
        );
    }
}

function errorFlow(element, html) {
    element
        .addClass("text-danger")
        .removeClass("text-center text-white badge bg-success");
    element.html(html);
    element.fadeIn("slow");
}

function successFlow(element, html) {
    element
        .removeClass("text-danger")
        .addClass("text-center text-white badge bg-success");
    element.html(
        '<p class="mt-1"><strong class="h4 text-white">' +
        html +
        " 😉</strong></p>"
    );
    element.fadeIn("slow");
    setTimeout(() => {
        element.fadeOut("slow");
    }, 3000);
}

function removeLoader() {
    $(".register-btn").prop("disabled", false);
    $(".register-btn-inner").html("Register now");
    $(".register-spinner").hide();
}

function makeToaster(toastType, toastHeading, toastDetail) {
    toastr[toastType](toastDetail, toastHeading, {
        closeButton: true,
        tapToDismiss: false,
        progressBar: true,
    });
}


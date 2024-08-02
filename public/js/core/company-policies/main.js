Dropzone.autoDiscover = false;

$(function () {
    'use strict';

    var singleFile = $('#dpz-single-file'), myDropzone;
    var formsArr = ['stepper1', 'stepper2', 'stepper3', 'repeaterForm'];

    // Basic example
    singleFile.dropzone({
        paramName: 'file', // The name that will be used to transfer the file
        maxFiles: 1,
        autoProcessQueue: false,
        acceptedFiles:
            '.csv, .xls, .xlsx,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        addRemoveLinks: false,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        init: function () {

            var submitButton = document.querySelector(".dz-btn");
            myDropzone = this;
            submitButton.addEventListener("click", function () {
                this.disabled = true;
                myDropzone.processQueue();
            });

            this.on("processing", function () {
                this.options.autoProcessQueue = true;
            });

            this.on("addedfile", function () {
                // console.log('file added');
                $('.dz-btn').removeClass('d-none');
            });


            this.on("sending", function (file, xhr, formData) {
                // console.log('sending');
                $(".errors-print").hide();
                $(".progress-bar-dz").removeClass('d-none');
                // var formDataNew = new FormData();
                formsArr.forEach(element => {
                    var arr = $('#' + element).serializeArray();
                    $.each(arr, function (key, value) {
                        formData.append(value.name, value.value);
                    });
                });
            });
            this.on("removedfile", (file) => {
                file.previewElement.remove();
                if (myDropzone.getQueuedFiles().length == 0) {
                    $('.dz-btn').addClass('d-none');
                }
                makeToaster(
                    "error",
                    "Removed !!",
                    'File is removed , kindly remove all errors to proceed. 👌'
                );
            });

            this.on("success", (file, response) => {
                // console.log(response);
                // console.log('success');
                $(".progress-bar-dz").addClass('d-none');
                $(".errors-print").html("😃 " + response.response).removeClass('text-danger').addClass('text-success bx-flashing').show();
                makeToaster(
                    "success",
                    'File uploaded successfully.',
                    response.response,
                    "😃"
                );
                formsArr.forEach(element => {
                    $('#' + element).trigger("reset");
                });
                $("#dpz-single-file").trigger('reset');
                setTimeout(() => {
                    location.reload();
                }, 1000);
            });

            this.on("error", (response) => {
                // console.log('error');
                // console.log(response);
                myDropzone.removeAllFiles();
                $(".errors-print").show();
                $(".progress-bar-dz").addClass('d-none');
                submitButton.disabled = false;
                if (response.xhr.status == 422) {
                    validationPrint(response.xhr);
                } else if (response.xhr.status == 409) {
                    var json = JSON.parse(response.xhr.response);
                    console.log(json);
                    $(".errors-print").html(json.message + ' : ' + json.response).addClass('text-capitalize bx-flashing');
                } else {
                    $(".errors-print").html(response.xhr.response);
                }
            });
        },
    });
});

$("#customSwitch111").on('change', function () {
    $(this).is(':checked') ?
        $(".policy-fees-div").fadeOut(200) :
        $(".policy-fees-div").fadeIn(200);
});

$("#companiesNameSelect").on('change', function (e) {
    
    $.ajax({
        type: "get",
        url: "/api/getCompanyData",
        beforeSend: function () {
            $(".render-here").html('')
            $(".loader-spin").removeClass('d-none')
        },
        data: { id: $(this).find(':selected').val() },
        success: function (response) {
            $(".render-here").html(response)
        },
        error: function (response) {
        },
        complete: function () {
            $(".loader-spin").addClass('d-none')
        },
    });
});

$(".select3").change(function (e) {
    e.preventDefault();
    // $(this).attr('name') == 'upload_type' ?
    //     $("#dpz-single-file").attr("action", $(this).find("option:selected").val()) :
    //     '';
    if ($("#stepper3").valid()) {
        $(".dz-upload").addClass("d-none");
        $(".loader-spin2").removeClass("d-none");
        setTimeout(() => {
            $(".dz-upload").removeClass("d-none");
            $(".loader-spin2").addClass("d-none");
            $("#placeSelectedValHere").html($(this).find("option:selected").text());
        }, 1000);
    }
});

function validationPrint(response, errorsClass = "errors-print") {
    var json = JSON.parse(response.response);
    // console.log(json);
    var html =
        '<div class="mb-4">' +
        "<strong>Whoops! Something went wrong.</strong>" +
        '<ul class="mt-1 list-disc list-inside text-sm text-danger ul-class">';
    $.each(
        json.errors,
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
    $("." + errorsClass).html(html);
}


// function companyDetailsCB(response, arg2) {
//     console.log(response);
//     console.log(arg2);
// }
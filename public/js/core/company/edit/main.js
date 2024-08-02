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
    $('.render-here').show();
});
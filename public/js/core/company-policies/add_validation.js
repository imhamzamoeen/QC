$('.second_next').click(function (e) {
    e.preventDefault();

    var user = $('input[name^="Company_features"]');


    user.filter('input[name$="[highlights]"]').each(function () {



        $(this).rules('add', {
            required: true
        });

    });


});

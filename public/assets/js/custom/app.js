$(window).on("load", function () {
    if (feather) {
        feather.replace({
            width: 14,
            height: 14,
        });
    }
});

function makeBtnLoader(btnClass, loaderClass) {
    $("." + btnClass).prop("disabled", true);
    $("." + loaderClass).show();
}

function removeBtnLoader(btnClass, loaderClass) {
    $("." + btnClass).prop("disabled", false);
    $("." + loaderClass).hide();
}

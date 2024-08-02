$(function () {
    "use strict";

    // form repeater jquery
    $(".invoice-repeater, .repeater-default").repeater({
        show: function () {
            $(this).slideDown();
            $(this).find('.select2-container').remove();
            $(this).find('.select2').select2({
                dropdownAutoWidth: true,
                width: '100%',
            });
            $(this).find('.select2Tag-container').remove();
            $(this).find('.select2Tag').select2({
                dropdownAutoWidth: true,
                width: '100%',
                tags: true
            });
        
            // Feather Icons
            if (feather) {
                feather.replace({ width: 14, height: 14 });
            }
        },
        hide: function (deleteElement) {
            var obj = $(this);
            $(this).find('.select2-container').remove();
            $(this).find('.select2').select2({
                width: '100%',
                placeholder: "Placeholder text",
                allowClear: true
            });
            $(this).find('.select2Tag-container').remove();
            $(this).find('.select2Tag').select2({
                width: '100%',
                placeholder: "Placeholder text",
                allowClear: true
            });
            Swal.fire({
                title: "Are you sure to remove the previous entry ?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-outline-danger ms-1",
                },
                buttonsStyling: false,
            }).then(function (result) {
                if (result.value) {
                    obj.slideUp(deleteElement);
                    Swal.fire({
                        icon: "success",
                        title: "Deleted ! ",
                        text: "Removed and entry!",
                        customClass: {
                            confirmButton: "btn btn-success",
                        },
                    });
                }
            });
        },
    });
});

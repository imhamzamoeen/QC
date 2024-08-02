$(function () {
    "use strict";

    // form repeater jquery
    $(".formula-repeater, .repeater-default").repeater({
        show: function () {
            $(this).slideDown();
            $(this).find('.select2-container').remove();
            $(this).find('.select2').select2({
                // dropdownAutoWidth: true,
                width: '100%',
                tags: true,
            });
            $(this).find('.select2Tag-container').remove();
            $(this).find('.select2Tag').select2({
                // dropdownAutoWidth: true,
                width: '100%',
                tags: true
            });
            // alert("aya bhai ");
            // console.log($(this).parent().data('repeater-list'));
            if ($(this).parent().data('repeater-list') == 'Company_Formula_For_Annual') {
                add_option_to_select_annual();
            } else if ($(this).parent().data('repeater-list') == 'Company_Formula_For_Semi_Annual') {
                add_option_to_select_semi_annual();
            } else if ($(this).parent().data('repeater-list') == 'Company_Formula_For_Quarterly') {
                add_option_to_select_quarterly();
            } else if ($(this).parent().data('repeater-list') == 'Company_Formula_For_Monthly') {
                add_option_to_select_monthly();
            }

            if ($(this).parent().data('repeater-list') == 'Company_Formula_For_Annual_Term') {
                add_option_to_select_annual_term();
            } else if ($(this).parent().data('repeater-list') == 'Company_Formula_For_Semi_Annual_Term') {
                add_option_to_select_semi_annual_term();
            } else if ($(this).parent().data('repeater-list') == 'Company_Formula_For_Quarterly_Term') {
                add_option_to_select_quarterly_term();
            } else if ($(this).parent().data('repeater-list') == 'Company_Formula_For_Monthly_Term') {
                add_option_to_select_monthly_term();
            }

            // Feather Icons
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
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

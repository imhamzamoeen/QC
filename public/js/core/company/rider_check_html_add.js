$('.rider_checkbox').click(function (e) {

  
    if ($(this).prop("checked") == true) {

        $('#' + $(this).val() + '_legacy_repeater_for_whole').show()
        $('#' + $(this).val() + '_adb_repeater_for_whole').show()
        $('#' + $(this).val() + '_child_repeater_for_whole').show()
    } else {
        $('#' + $(this).val() + '_legacy_repeater_for_whole').hide()
        $('#' + $(this).val() + '_adb_repeater_for_whole').hide()
        $('#' + $(this).val() + '_child_repeater_for_whole').hide()
    }


});

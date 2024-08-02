
$('#customOptionsCheckableCheckboxWithIcon2').click(function (e) {
    if ($(this).prop('checked') == true) {
        $('#childrens').attr('name', 'childrens');
        $('#child_div').show();
    } else {
        $("#childrens").removeAttr('name');
        $('#child_div').hide();
    }
});

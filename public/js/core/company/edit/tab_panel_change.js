$('#UpdateOptionSelect').change(function (e) { 
    e.preventDefault();
    // value="#"+$(this).val()+'-step';
    // alert(value);
    // $('#address-step-trigger').attr('data-target', value);
    $('.update_haeding').html('Update '+$(this).val());

    $('.dependent_div').hide();
    $('#'+$(this).val()+'_div').show();

});
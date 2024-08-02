$('.assign_all_add').click(function (e) { 
    e.preventDefault();
    $('#select2-companies').select2('destroy').find('option').prop('selected', 'selected').end().select2();
});

$('.assign_all_edit').click(function (e) { 
    e.preventDefault();
    $('#select2-edit-companies').select2('destroy').find('option').prop('selected', 'selected').end().select2();
});



$('.unassign_all_add').click(function (e) { 
    e.preventDefault();

    $('#select2-companies').select2('destroy').find('option').prop('selected', false).end().select2();
});


$('.unassign_all_edit').click(function (e) { 
    e.preventDefault();
    $('#select2-edit-companies').select2('destroy').find('option').prop('selected', false).end().select2();
  
});

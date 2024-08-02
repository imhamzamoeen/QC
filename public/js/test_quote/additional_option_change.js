
$('#policy_type').change(function (e) { 
    //jab woh policy_type ko choose krly
    e.preventDefault();
    $('.policy_level_div').show(); 
    $(".policy_type_div").removeClass("col-md-12");
    $(".policy_type_div").addClass("col-md-6");
});






function EditModal(object) {
    // console.log(object);

          //clearing all selected options 
          $('.select2-selection__choice').remove();
          $("option:selected").prop("selected", false)
   
    if (object == 0) {
//   
            // console.log(global_obj);
  

        //Setting the new options 
        if ($("#company_field option[value=" + global_obj[0].company.id + "]").length > 0) {
            $("#company_field option[value=" + global_obj[0].company.id + "]").prop("selected", true);
            $("#select2-company_field-container").text(global_obj[0].company.name);
        }
        $('#policy_name_field').val(global_obj[0].policy_name);
        $('#policy_id').val(global_obj[0].id);



        if ($("#policy_type option[value=" + global_obj[0].policy_type + "]").length > 0) {
            $("#policy_type option[value=" + global_obj[0].policy_type + "]").prop("selected", true);
            $("#select2-policy_type-container").text(global_obj[0].policy_type);
        }

        if ($("#policy_level option[value=" + global_obj[0].level + "]").length > 0) {
            $("#policy_level option[value=" + global_obj[0].level + "]").prop("selected", true);
            $("#select2-policy_level-container").text(global_obj[0].level);
        }

    } else {
        //clearing all selected options 
        $('.select2-selection__choice').remove();
        $("option:selected").prop("selected", false)


        //Setting the new options 
        if ($("#company_field option[value=" + object.company.id + "]").length > 0) {
            $("#company_field option[value=" + object.company.id + "]").prop("selected", true);
            $("#select2-company_field-container").text(object.company.name);
        }
        $('#policy_name_field').val(object.policy_name);
        $('#policy_id').val(object.id);



        if ($("#policy_type option[value=" + object.policy_type + "]").length > 0) {
            $("#policy_type option[value=" + object.policy_type + "]").prop("selected", true);
            $("#select2-policy_type-container").text(object.policy_type);
        }

        if ($("#policy_level option[value=" + object.level + "]").length > 0) {
            $("#policy_level option[value=" + object.level + "]").prop("selected", true);
            $("#select2-policy_level-container").text(object.level);
        }
    }


    $('#editpolicymanagmentmodal').modal('show');
}

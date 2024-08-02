function UpdateFormula() {
    if ($('#company_formula_form').valid()) {


        result_from_check_ages = true;
        if (formula_custom_check() == false) {
            toaster('error', 'Formula Step is not correctly made', ' Company Add');
            return;
        }
        // $(".fomula_update_btn").attr("disabled", true);
        GlobalFormData = new FormData();
        GlobalFormData.append('company_id', $('#companiesNameSelect').val());

        var localformData = new FormData($('#company_formula_form')[0]);
        for (let [key, value] of localformData) {
            GlobalFormData.append(key, value);
            // console.log(`${key}: ${value}`)

        }

        if (GlobalFormData.has('Company_Formula_For_Annual[0][result_variable]') == true) {
            //it means k whole ka formula likha h 

            GlobalFormData.append('whole_formula_check', 'true');
        }
        if (GlobalFormData.has('Company_Formula_For_Annual_Term[0][result_variable]') == true) {
            //it means k whole ka formula likha h 

            GlobalFormData.append('term_formula_check', 'true');
        }
        // for (let [key, value] of GlobalFormData) {
        //     // console.log(`${key}: ${value}`)
        // }
        swal_ask('Update Company Info', 'Are you sure to make these changes', 'warning', 'yes, please update', 'Error', 'Action Stopped', 'info', 'Ajax_Call_Dynamic', route_to_update_company_formula_details, "POST", GlobalFormData, "UpdateSuccessFunction", "FailedToasterResponse");


        // Ajax_Call_Dynamic(route_to_update_company_formula_details, "POST", GlobalFormData, "UpdateSuccessFunction", 'FailedToasterResponse');
    }

};

function UpdateFactor() {
    // $(".fomula_update_btn").attr("disabled", true);
    GlobalFormData = new FormData();
    GlobalFormData.append('company_id', $('#companiesNameSelect').val());

    var localformData = new FormData($('#factor_detail_form')[0]);
    for (let [key, value] of localformData) {
        GlobalFormData.append(key, value);
        // console.log(`${key}: ${value}`)
    }
    // for (let [key, value] of GlobalFormData) {
    //     // console.log(`${key}: ${value}`)
    // }

    // Ajax_Call_Dynamic(route_to_update_company_factor_details, "POST", GlobalFormData, "UpdateSuccessFunction", 'FailedToasterResponse');

    swal_ask('Update Company Info', 'Are you sure to make these changes', 'warning', 'yes, please update', 'Error', 'Action Stopped', 'info', 'Ajax_Call_Dynamic', route_to_update_company_factor_details, "POST", GlobalFormData, "UpdateSuccessFunction", "FailedToasterResponse");

};



function UpdateRiders() {

    if ($('#customOptionsCheckableCheckbox1').prop("checked") || $('#customOptionsCheckableCheckbox2').prop("checked")) {
        result_from_check_ages = true;
        if (checkages() == false) {
            return;
        }
        // $(".fomula_update_btn").attr("disabled", true);
        GlobalFormData = new FormData();
        GlobalFormData.append('company_id', $('#companiesNameSelect').val());

        var localformData = new FormData($('#company_rider_form')[0]);
        for (let [key, value] of localformData) {
            GlobalFormData.append(key, value);
            // console.log(`${key}: ${value}`)
        }
        // for (let [key, value] of GlobalFormData) {
        //     console.log(`${key}: ${value}`)
        // }
        swal_ask('Update Company Info', 'Are you sure to make these changes', 'warning', 'yes, please update', 'Error', 'Action Stopped', 'info', 'Ajax_Call_Dynamic', route_to_update_company_riders_details, "POST", GlobalFormData, "UpdateSuccessFunction", "FailedToasterResponse");

        // Ajax_Call_Dynamic(route_to_update_company_riders_details, "POST", GlobalFormData, "UpdateSuccessFunction", 'FailedToasterResponse');
    }
    toaster("warning", "please choose whole and term option before update", "Update Rider")
};



function UpdateSuccessFunction(response) {
    // console.log(response);
    toaster("success", response.response, "Update");
    $('#stepper1').trigger("reset");
   

    var horizontalWizard = document.querySelector('.horizontal-wizard-example');
    var numberedStepper = new Stepper(horizontalWizard);
    setTimeout(() => {
        numberedStepper.previous();
    }, 1000);

    $(".fomula_update_btn").attr("disabled", false);

}

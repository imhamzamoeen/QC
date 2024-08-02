function AddHtml(DivName, counter) {
    // console.log(DivName);
    lower_div_name = DivName.toLowerCase();
    quote = "'";
    inputCounter = 0;
    if (DivName == "Annual") {
        if (annual_counter < 0) {
            annual_counter = counter + 1;
        }
        inputCounter = annual_counter;
    } else if (DivName == "Semi_Annual") {
        if (semi_annual_counter < 0) {
            semi_annual_counter = counter + 1;
        }
        inputCounter = semi_annual_counter;
    } else if (DivName == "Quarterly") {
        if (quarterly_counter < 0) {
            quarterly_counter = counter + 1;
        }
        inputCounter = quarterly_counter;
    } else if (DivName == "Monthly") {
        if (monthly_counter < 0) {
            monthly_counter = counter + 1;
        }
        inputCounter = monthly_counter;
    }
    else if (DivName == "Annual_Term") {
        if (annual_term_counter < 0) {
            annual_term_counter = counter + 1;
        }
        inputCounter = annual_term_counter;
    } else if (DivName == "Semi_Annual_Term") {
        if (semi_annual_term_counter < 0) {
            semi_annual_term_counter = counter + 1;
        }
        inputCounter = semi_annual_term_counter;
    } else if (DivName == "Quarterly_Term") {
        if (quarterly_term_counter < 0) {
            quarterly_term_counter = counter + 1;
        }
        inputCounter = quarterly_term_counter;
    } else if (DivName == "Monthly_Term") {
        if (monthly_term_counter < 0) {
            monthly_term_counter = counter + 1;
        }
        inputCounter = monthly_term_counter;
    }
    
    // console.log(inputCounter);



    html_to_add = ' <div class="row d-flex align-items-end" id="' + DivName + '_row_' + inputCounter + '">' +
        '<div class="col-md-2 col-12">' +
        '<div class="mb-1">' +
        '<label class="form-label" for="feature">Result Variable' +
        ' </label>' +
        '<input type="text"class="form-control result_variable_' + lower_div_name + '"  name="Company_Formula_For_' + DivName + '[' + inputCounter + '][result_variable]"  aria-describedby="result_variable" required> ' +
        ' </div>' +
        '</div>' +
        '<div class="col-md-2 col-12">' +
        '<div class="mb-1">' +
        '<label class="form-label" for="feature">Operand1' +
        ' </label>' +
        '<select class="select2 form-control operand operand_one_select_' + lower_div_name + '" name="Company_Formula_For_' + DivName + '[' + inputCounter + '][operand1]" aria-describedby="operand1" required>' +
        '<option value="" disabled>Please select Operand</option>' +
        '<option value="rate_from_db" selected>Rate From DB </option>' +
        '<option value="coverage">Coverage of the User</option>' +
        '<option value="age">Age of User</option>' +
        '<option value="annual_policy_fee">Annual Policy Fee </option>' +
        '<option value="semi_annual_policy_fee">Semi Annual Policy Fee</option>' +
        '<option value="quarterly_policy_fee">Quarerly Policy Fee </option>' +
        '<option value="monthly_policy_fee">Monthly Policy Fee </option>' +
        '<option value="annual_mode_factor">Annual Mode Factor</option>' +
        '<option value="semi_annual_mode_factor">Semi Annual Mode Factor</option>' +
        '<option value="quarterly_mode_factor">Quarerly Mode Factor</option>' +
        '<option value="monthly_mode_factor">Monthly Mode Factor </option>' +
        '</select> ' +
        '</div>' +
        '</div>' +
        '<div class="col-md-2 col-12">' +
        '<div class="mb-1">' +
        '<label class="form-label" for="operator">Operator </label>' +
        '<select class="select form-select operator_one_select_' + lower_div_name + '" name="Company_Formula_For_' + DivName + '[' + inputCounter + '][Operator]" aria-describedby="Operator" required>' +
        '<option value="" disabled>Please select a Operator </option>' +
        '<option value="+" selected>+</option>' +
        '<option value="-">-</option>' +
        '<option value="*">*</option>' +
        '<option value="/">/</option>' +
        '<option value="%">%</option>' +
        '<option value="round">Round by </option>' +
        '</select>' +

        '</div>' +
        '</div>' +
        '<div class="col-md-2 col-12">' +
        '<div class="mb-1">' +
        '<label class="form-label" for="Operand ">Opernad 2</label>' +
        '<select class="select2 form-select operand operand_two_select_' + lower_div_name + '" name="Company_Formula_For_' + DivName + '[' + inputCounter + '][operand2]" aria-describedby="operand2" required>' +
        '<option value="" disabled>Please select Operand</option>' +
        '<option value="rate_from_db" selected>Rate From DB</option>' +
        '<option value="coverage">Coverage of the User</option>' +
        '<option value="age">Age of User</option>' +
        '<option value="annual_policy_fee">Annual Policy Fee</option>' +
        '<option value="semi_annual_policy_fee">Semi Annual Policy Fee</option>' +
        '<option value="quarterly_policy_fee">Quarerly Policy Fee' +
        '</option>' +
        '<option value="monthly_policy_fee">Monthly Policy Fee' +
        '</option>' +
        '<option value="annual_mode_factor">Annual Mode Factor' +
        '</option>' +
        '<option value="semi_annual_mode_factor">Semi Annual Mode Factor</option>' +
        '<option value="quarterly_mode_factor">Quarerly Mode Factor</option>' +
        '<option value="monthly_mode_factor">Monthly Mode Factor </option>' +
        '</select>' +

        '</div>' +
        '</div>' +
        '<div class="col-md-3 col-12 ">' +
        '<div class="mb-1">' +
        ' <button type="button" onclick="DeleteHtml(' + quote + DivName + quote + ',' + inputCounter + ')" class="btn btn-flat-danger waves-effect">' +
        '<i data-feather="x" class="me-25"></i>' +
        '<span>Remove Step</span>' +
        '</button>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<hr />';
    IncrementPhpVariable(DivName);

    $('.' + DivName + '_div').append(html_to_add);
    function_name = DivName + '_add_option_to_select';
    // console.log(function_name);

    window[function_name]();

    Select2Reinitalize();



}


function DeleteHtml(DivName, inputCounter) {
    // console.log(DivName);
    // console.log(inputCounter);
    DecrementPhpVariable(DivName);
    $('#' + DivName + '_row_' + inputCounter).remove();
}

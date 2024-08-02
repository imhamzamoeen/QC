function formula_custom_check() {
    formula_check = true;
    my_options = ['rate_from_db', 'coverage', 'age', 'annual_policy_fee', 'semi_annual_policy_fee', 'quarterly_policy_fee', 'monthly_policy_fee', 'annual_mode_factor', 'semi_annual_mode_factor', 'quarterly_mode_factor', 'monthly_mode_factor'];
    steps_arr = [];
    repeater_divs = ['annual', 'semi_annual', 'quarterly', 'monthly'];
    types_of_formula = ['', '_term'];

    $.each(types_of_formula, function (ind, type_formula) {
        $.each(repeater_divs, function (indexInArray, valueOfElement) {
            // console.log(valueOfElement);

            $('.result_variable_' + valueOfElement+type_formula).each(function (index, element) {

                steps_arr.push(element.value);
            });
            $('.operand_one_select_' + valueOfElement+type_formula).each(function (index, element) {
                // console.log(typeof element.value);
                if ((steps_arr.includes(element.value, ) == false) && (my_options.includes(element.value, ) == false) && isNaN(element.value) == true) {
                    // console.log("aapka " + element.value + " nhe mila"+valueOfElement+ "main");
                    formula_check = false;
                }
            });

            $('.operand_two_select_' + valueOfElement+type_formula).each(function (index, element) {
                if ((steps_arr.includes(element.value, ) == false) && (my_options.includes(element.value, ) == false) && isNaN(element.value) == true) {
                    // console.log("aapka " + element.value + " nhe mila"+valueOfElement+ "main");
                    formula_check = false;
                }
            });

            if (formula_check == false) {
                return false;

            }



        });
    });

    return formula_check;


}

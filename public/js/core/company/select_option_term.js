value_to_add_term = '';

function add_option_to_select_annual_term() {

    var oneselectarray = {};
    var twoselectarray = {};

    $('.operand_one_select_annual_term').each(function (index, element) {


        oneselectarray[index] = element.value;
    });
    $('.operand_two_select_annual_term').each(function (index, element) {

        twoselectarray[index] = element.value;
    });


    $(".operand_two_select_annual_term option[class='new_option']").each(function () {
        $(this).remove();
    });
    $(".operand_one_select_annual_term option[class='new_option']").each(function () {
        $(this).remove();
    });



    $('.result_variable_annual_term').each(function (index, element) {
        // console.log(value_to_add_term);
        index_to_get = index;
        if (element.value != '') {
            value_to_add_term = $('.result_variable_annual_term:eq(' + index_to_get + ')').val();
            $('.operand_one_select_annual_term').each(function (index, element) {

                // console.log(index, "is index");
                if (index > index_to_get) {
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add_term,
                        'value': value_to_add_term,
                    }).appendTo(element);
                }

                element.value = oneselectarray[index];
            });
            $('.operand_two_select_annual_term').each(function (index, element) {
                // console.log(index);
                if (index > index_to_get) {
                    // console.log(element);
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add_term,
                        'value': value_to_add_term,
                    }).appendTo(element);
                    element.value = twoselectarray[index];

                }
            });
        }
    });
}


function add_option_to_select_semi_annual_term() {

    var oneselectsemiarray = {};
    var twoselectsemiarray = {};

    $('.operand_one_select_semi_annual_term').each(function (index, element) {
        oneselectsemiarray[index] = element.value;
    });
    $('.operand_two_select_semi_annual_term').each(function (index, element) {

        twoselectsemiarray[index] = element.value;
    });

    $(".operand_two_select_semi_annual_term option[class='new_option']").each(function () {
        $(this).remove();
    });
    $(".operand_one_select_semi_annual_term option[class='new_option']").each(function () {
        $(this).remove();
    });
    $('.result_variable_semi_annual_term').each(function (index, element) {
        // console.log(value_to_add_term);
        index_to_get = index;

        if (element.value != '') {

            value_to_add_term = $('.result_variable_semi_annual_term:eq(' + index_to_get + ')').val();
            $('.operand_one_select_semi_annual_term').each(function (index, element) {

                // console.log(index);
                if (index > index_to_get) {
                    // console.log(element);
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add_term,
                        'value': value_to_add_term,
                    }).appendTo(element);

                    element.value = oneselectsemiarray[index];
                }
            });
            $('.operand_two_select_semi_annual_term').each(function (index, element) {
                // console.log(index);
                if (index > index_to_get) {
                    // console.log(element);
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add_term,
                        'value': value_to_add_term,
                    }).appendTo(element);
                    
                element.value = twoselectsemiarray[index];

                }
            });
        }
    });
}


function add_option_to_select_quarterly_term() {

    var oneselectquarterarray = {};
    var twoselectquarterarray = {};

    $('.operand_two_select_quarterly_term').each(function (index, element) {
        twoselectquarterarray[index] = element.value;
    });
    $('.operand_one_select_quarterly_term').each(function (index, element) {

        oneselectquarterarray[index] = element.value;
    });

    $(".operand_two_select_quarterly_term option[class='new_option']").each(function () {
        $(this).remove();
    });
    $(".operand_one_select_quarterly_term option[class='new_option']").each(function () {
        $(this).remove();
    });
    $('.result_variable_quarterly_term').each(function (index, element) {
        // console.log(value_to_add_term);
        index_to_get = index;

        if (element.value != '') {

            value_to_add_term = $('.result_variable_quarterly_term:eq(' + index_to_get + ')').val();
            $('.operand_one_select_quarterly_term').each(function (index, element) {

                // console.log(index);
                if (index > index_to_get) {
                    // console.log(element);
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add_term,
                        'value': value_to_add_term,
                    }).appendTo(element);
                    element.value = oneselectquarterarray[index];

                }
            });
            $('.operand_two_select_quarterly_term').each(function (index, element) {
                // console.log(index);
                if (index > index_to_get) {
                    // console.log(element);
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add_term,
                        'value': value_to_add_term,
                    }).appendTo(element);
                    element.value = twoselectquarterarray[index];

                }
            });
        }
    });
}


function add_option_to_select_monthly_term() {

    var oneselectmonthlyarray = {};
    var twoselectmonthlyarray = {};

    $('.operand_two_select_monthly_term').each(function (index, element) {
        twoselectmonthlyarray[index] = element.value;
    });
    $('.operand_one_select_monthly_term').each(function (index, element) {

        oneselectmonthlyarray[index] = element.value;
    });

    $(".operand_two_select_monthly_term option[class='new_option']").each(function () {
        $(this).remove();
    });
    $(".operand_one_select_monthly_term option[class='new_option']").each(function () {
        $(this).remove();
    });
    $('.result_variable_monthly_term').each(function (index, element) {
        // console.log(value_to_add_term);
        index_to_get = index;

        if (element.value != '') {

            value_to_add_term = $('.result_variable_monthly_term:eq(' + index_to_get + ')').val();
            $('.operand_one_select_monthly_term').each(function (index, element) {

                // console.log(index);
                if (index > index_to_get) {
                    // console.log(element);
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add_term,
                        'value': value_to_add_term,
                    }).appendTo(element);
                    element.value = oneselectmonthlyarray[index];

                }
            });
            $('.operand_two_select_monthly_term').each(function (index, element) {
                // console.log(index);
                if (index > index_to_get) {
                    // console.log(element);
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add_term,
                        'value': value_to_add_term,
                    }).appendTo(element);
                    element.value = twoselectmonthlyarray[index];

                }
            });
        }
    });
}

value_to_add = '';

function Annual_add_option_to_select() {

    var oneselectarray = {};
    var twoselectarray = {};

    $('.operand_one_select_annual').each(function (index, element) {


        oneselectarray[index] = element.value;
    });
    $('.operand_two_select_annual').each(function (index, element) {

        twoselectarray[index] = element.value;
    });


    $(".operand_two_select_annual option[class='new_option']").each(function () {
        $(this).remove();
    });
    $(".operand_one_select_annual option[class='new_option']").each(function () {
        $(this).remove();
    });



    $('.result_variable_annual').each(function (index, element) {
        // console.log(value_to_add);
        index_to_get = index;
        if (element.value != '') {
            value_to_add = $('.result_variable_annual:eq(' + index_to_get + ')').val();
            $('.operand_one_select_annual').each(function (index, element) {

                // console.log(index, "is index");
                if (index > index_to_get) {
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add,
                        'value': value_to_add,
                    }).appendTo(element);
                }

                element.value = oneselectarray[index];
            });
            $('.operand_two_select_annual').each(function (index, element) {
                // console.log(index);
                if (index > index_to_get) {
                    // console.log(element);
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add,
                        'value': value_to_add,
                    }).appendTo(element);
                    element.value = twoselectarray[index];

                }
            });
        }
    });
}


function Semi_Annual_add_option_to_select() {

    var oneselectsemiarray = {};
    var twoselectsemiarray = {};

    $('.operand_one_select_semi_annual').each(function (index, element) {
        oneselectsemiarray[index] = element.value;
    });
    $('.operand_two_select_semi_annual').each(function (index, element) {

        twoselectsemiarray[index] = element.value;
    });

    $(".operand_two_select_semi_annual option[class='new_option']").each(function () {
        $(this).remove();
    });
    $(".operand_one_select_semi_annual option[class='new_option']").each(function () {
        $(this).remove();
    });
    $('.result_variable_semi_annual').each(function (index, element) {
        // console.log(value_to_add);
        index_to_get = index;

        if (element.value != '') {

            value_to_add = $('.result_variable_semi_annual:eq(' + index_to_get + ')').val();
            $('.operand_one_select_semi_annual').each(function (index, element) {

                // console.log(index);
                if (index > index_to_get) {
                    // console.log(element);
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add,
                        'value': value_to_add,
                    }).appendTo(element);

                    element.value = oneselectsemiarray[index];
                }
            });
            $('.operand_two_select_semi_annual').each(function (index, element) {
                // console.log(index);
                if (index > index_to_get) {
                    // console.log(element);
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add,
                        'value': value_to_add,
                    }).appendTo(element);
                    
                element.value = twoselectsemiarray[index];

                }
            });
        }
    });
}


function Quarterly_add_option_to_select() {

    var oneselectquarterarray = {};
    var twoselectquarterarray = {};

    $('.operand_two_select_quarterly').each(function (index, element) {
        twoselectquarterarray[index] = element.value;
    });
    $('.operand_one_select_quarterly').each(function (index, element) {

        oneselectquarterarray[index] = element.value;
    });

    $(".operand_two_select_quarterly option[class='new_option']").each(function () {
        $(this).remove();
    });
    $(".operand_one_select_quarterly option[class='new_option']").each(function () {
        $(this).remove();
    });
    $('.result_variable_quarterly').each(function (index, element) {
        // console.log(value_to_add);
        index_to_get = index;

        if (element.value != '') {

            value_to_add = $('.result_variable_quarterly:eq(' + index_to_get + ')').val();
            $('.operand_one_select_quarterly').each(function (index, element) {

                // console.log(index);
                if (index > index_to_get) {
                    // console.log(element);
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add,
                        'value': value_to_add,
                    }).appendTo(element);
                    element.value = oneselectquarterarray[index];

                }
            });
            $('.operand_two_select_quarterly').each(function (index, element) {
                // console.log(index);
                if (index > index_to_get) {
                    // console.log(element);
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add,
                        'value': value_to_add,
                    }).appendTo(element);
                    element.value = twoselectquarterarray[index];

                }
            });
        }
    });
}


function Monthly_add_option_to_select() {

    var oneselectmonthlyarray = {};
    var twoselectmonthlyarray = {};

    $('.operand_two_select_monthly').each(function (index, element) {
        twoselectmonthlyarray[index] = element.value;
    });
    $('.operand_one_select_monthly').each(function (index, element) {

        oneselectmonthlyarray[index] = element.value;
    });

    $(".operand_two_select_monthly option[class='new_option']").each(function () {
        $(this).remove();
    });
    $(".operand_one_select_monthly option[class='new_option']").each(function () {
        $(this).remove();
    });
    $('.result_variable_monthly').each(function (index, element) {
        // console.log(value_to_add);
        index_to_get = index;

        if (element.value != '') {

            value_to_add = $('.result_variable_monthly:eq(' + index_to_get + ')').val();
            $('.operand_one_select_monthly').each(function (index, element) {

                // console.log(index);
                if (index > index_to_get) {
                    // console.log(element);
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add,
                        'value': value_to_add,
                    }).appendTo(element);
                    element.value = oneselectmonthlyarray[index];

                }
            });
            $('.operand_two_select_monthly').each(function (index, element) {
                // console.log(index);
                if (index > index_to_get) {
                    // console.log(element);
                    $('<option/>', {
                        'class': 'new_option',
                        'text': value_to_add,
                        'value': value_to_add,
                    }).appendTo(element);
                    element.value = twoselectmonthlyarray[index];

                }
            });
        }
    });
}

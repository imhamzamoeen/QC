function checkages() {
    toaster('info', 'please wait, we are validating your entries..', 'Riders Check')
    var message = '';

    var lower_age_whole = [];
    var upper_age_whole = [];
    var lower_age_term = [];
    var upper_age_term = [];

    //Getting all whole values 

    $(".lower_age_whole_class").each(function (e) {

        $(this).val() != '' ? lower_age_whole.push(parseFloat($(this).val())) : '';
    });
    $(".upper_age_whole_class").each(function (e) {


        $(this).val() != '' ? upper_age_whole.push(parseFloat($(this).val())) : '';
    });



    //Getting all term values 
    $(".lower_age_term_class").each(function (e) {

        $(this).val() != '' ? lower_age_term.push(parseFloat($(this).val())) :'';
    });

    $(".upper_age_term_class").each(function (e) {

        $(this).val() != '' ? upper_age_term.push(parseFloat($(this).val())) : '';


    });

    if (lower_age_whole.length == upper_age_whole.length) {


        $.each(lower_age_whole, function (indexInArray, valueOfElement) {
            // console.log(indexInArray);
            if (indexInArray > 0) {
                if (lower_age_whole[indexInArray] <= upper_age_whole[indexInArray - 1]) {
                    result_from_check_ages = false;
                    message = "lower age Whole index: " + indexInArray + " < Upper age Whole " + upper_age_whole[indexInArray - 1];


                }

                if (upper_age_whole[indexInArray] <= lower_age_whole[indexInArray]) {
                    result_from_check_ages = false;
                    message = "upper age Whole index: " + indexInArray + " < lower age Whole " + upper_age_whole[indexInArray];


                }
            }
            if (indexInArray == 0) {

                if (upper_age_whole[0] <= lower_age_whole[0]) {

                    result_from_check_ages = false;

                    message = "upper age Whole index: 0 < lower age Whole  0";

                }
            }
            message != '' ? toaster('error', message, ' ADB Riders Check Whole') : '';


        });



    } else if (lower_age_whole.length != upper_age_whole.length) {
        result_from_check_ages = false;
    }

    if (lower_age_term.length == upper_age_term.length) {

        $.each(lower_age_term, function (indexInArray, valueOfElement) {
            // console.log(indexInArray);
            if (indexInArray > 0) {
                if (lower_age_term[indexInArray] <= upper_age_term[indexInArray - 1]) {
                    result_from_check_ages = false;
                    message = "lower age Term index: " + indexInArray + " < Upper Age Term " + upper_age_whole[indexInArray - 1];
                }

                if (upper_age_term[indexInArray] <= lower_age_term[indexInArray]) {
                    result_from_check_ages = false;
                    message = "upper age Term index: " + indexInArray + " < lower age Term  " + upper_age_whole[indexInArray];
                }
            }
            if (indexInArray == 0) {
                if (upper_age_term[0] <= lower_age_term[0]) {
                    result_from_check_ages = false;
                    message = "upper age Term index: 0 < lower age Term 0";
                }
            }

            message != '' ? toaster('error', message, ' ADB Riders Check Term') : '';


        });


    } else if (lower_age_term.length != upper_age_term.length) {
        result_from_check_ages = false;
    }




    if (result_from_check_ages == false) {
        toaster('error', 'Please properly fill all the riders, you have missed something', '  Riders Check ')

    }
    return result_from_check_ages;




    // console.log(upper_age_whole.length + 'upper age whole');
    // console.log(lower_age_whole.length + 'lower age whole');
    // console.log(upper_age_term.length + 'upper age term');
    // console.log(lower_age_term.length + 'lower age term');

    if (lower_age_whole.length != upper_age_whole.length) {
        toaster('error', 'O bhai meharbai kr upper and lower age k andar farq h  ... ', ' ADB Riders Check Whole')
    }

    if (lower_age_term.length != upper_age_term.length) {
        toaster('error', 'O bhai meharbai kr upper and lower age k andar farq h  ... ', ' ADB Riders Check Whole')
    }



}

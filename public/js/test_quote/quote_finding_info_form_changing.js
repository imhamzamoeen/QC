$('#policy_type').change(function (e) {
    //yeh neechy wala remove kr dena h bad mai jab generic hoga abhi nhe h ..



    e.preventDefault();
    // $("#policy_type").parent().removeClass("col-md-12");
    // $("#policy_type").parent().addClass("col-md-6");



    if ($(this).val() == "term") {
        // $('#coverage_for_term').show();
        // $('#coverage_for_whole').hide();
        $('#smoking_div').show();
        // $('#customOptionsCheckableRadios1').attr('name', 'smoker');
        // $('#customOptionsCheckableRadios2').attr('name', 'smoker');

        // //additional option work 
        // $('#adb_factor_div').hide();
        // $('#child_factor_div').hide();
        // $('#child_div').hide();

        $('#customOptionsCheckableCheckboxWithIcon2').prop('checked', false)
        $('#customOptionsCheckableCheckboxWithIcon1').prop('checked', false)

        $("#legacy_factor_div").removeClass("col-md-4");
        $("#legacy_factor_div").addClass("col-md-12");

    } else {
        // $('#smoking_div').hide();
        // $('#customOptionsCheckableRadios1').removeAttr('name');
        // $('#customOptionsCheckableRadios2').removeAttr('name');

        // $('#coverage_for_whole').show();
        // $('#coverage_for_term').hide();


        // //additional option work 
        // $('#adb_factor_div').show();
        //  $('#child_factor_div').show();

        // $("#legacy_factor_div").removeClass("col-md-12");
        // $("#legacy_factor_div").addClass("col-md-4");

    }


    // $('#sub_policy_div').show();

});



function FormSumit() {


    // alert("clicked ");

    console.log($('#policy_type').val());




    if ($('#policy_type').val() == "term") {
        // formData.append('coverage', $('#coverage').val());
        // $("#numeral-formatting").removeAttr('name');
        // $('#coverage').attr('name', 'coverage'); //setting name of that field so that it can be validated later 
        $('#user_details').validate().settings.rules.age = {
            required: true,
            min: 20,
            max: 65,
        };
        $('#user_details').validate().settings.messages.age = {
            required: 'must be filled',
            min: 'should > 20',
            max: 'should < 65',
        };


    } else if ($('#policy_type').val() == "whole") {

        // formData.append('coverage', $('#numeral-formatting').val()); 

        // $("#coverage").removeAttr('name');
        // $('#numeral-formatting').attr('name', 'coverage');
        $('#user_details').validate().settings.rules.age = {
            required: true,
            min: 0,
            max: 100,
        };
        $('#user_details').validate().settings.messages.age = {
            required: 'must be filled',
            min: 'should > 0',
            max: 'should < 100',
        };


    }


    var isValid = $("#user_details").valid();


    if (isValid) {

        toastr["info"]("System is calculating..please be patient", "Result", {
            closeButton: true,
            tapToDismiss: false,
            progressBar: true,
            // rtl: isRtl,
        });
        var formData = new FormData($('#user_details')[0]);
        // for (let [key, value] of formData) {
        //   console.log(`${key}: ${value}`)
        // }
        Ajax_Call_Dynamic(route_to_filter, "POST", formData, "FilterSuccessFuntion", "FilterFailedFunction")
        //HERE WE WILL CALL THE DYNAMIC AJAX AND IN THE SUCCESS, THE STEPPER WILL CHANGE

    } else {

        // e.preventDefault();
    }
    return;
}




function append_html_to_main_cards(response) {

    results_object.length = 0; // first clearing the old results in the array
    var html_to_add = '';
    var quote = "'";
    var counter = 0; // to access the results objects that is stored in the array
    response.response.data.forEach(element => {

        $.each(element, function (key, value) {
            // let myObj = JSON.stringify(element);
            results_object.push(value);


            globalObj = value;
            tempObj = value;
            // console.log(tempObj);
            if (value.name != undefined) {
                html_to_add += '<div class="card ecommerce-card">' +
                    '<div class="item-img text-center">' +
                    '<a href="#">' +
                    '<img class="img-fluid card-img-top" style="height:fit-content;width:fit-content " src="' + asset + '/' + value.image + '" alt="" /></a>' +
                    '</div>' +
                    '<div class="card-body">' +
                    '<div class="item-wrapper">' +
                    '<div class="item-rating">' +
                    '<ul class="unstyled-list list-inline">';
                for (i = 0; i < value.rating; i++) {
                    html_to_add += '<i class="fa fa-star" aria-hidden="true"></i>';
                }



                html_to_add += '</ul>' +
                    '</div>' +
                    '<div>' +
                    '<h6 class="item-price">' +
                    'Annual:' + value.annual + '$' +
                    '</h6>' +
                    '</div>' +
                    '</div>' +
                    '<h5 class="item-name">' +
                    '<a class="text-body" href="#">' + value.name + '</a>' +
                    '<span class="card-text item-company">mail <a href="#" class="company-name">' + value.email + '</a></span>' +
                    '</h5>' +
                    '<p class="card-text item-description"><strong>' +
                    value.sub_policy_type +
                    '</strong><br>' +
                    '<ul>';

                if (value.hasOwnProperty('features')) {
                    $.each(value.features, function (indexInArray, valueOfElement) {
                        if (indexInArray < 3)
                            html_to_add += '<li>' + indexInArray + '. ' + valueOfElement + '</li>';

                    });
                    if (value.riders != undefined) {
                        html_to_add += '<li style="color:red;font-weight:700">Riders Option Available </li>';
                    }

                }


                html_to_add += '</ul>' +
                    '</p>' +
                    '</div>' +
                    '<div class="item-options text-center">' +
                    '<div class="item-wrapper">' +
                    '<div class="item-cost">' +
                    '<h6 class="item-price">  ' +
                    'Annual:' + value.annual + '$<br>' +
                    'Semi-Annual:' + value.semi_annual + '$<br>' +
                    'Monthly:' + value.monthly + '$<br>' +
                    '</h6>' +
                    '</div>' +
                    '</div>' +
                    '<a href="#" onclick="policy_view(' + counter + ')" target="_blank" class="btn btn-light btn-wishlist">' +
                    '<span>View</span>' +
                    '</a>' +
                    '<a href="#" class="btn btn-primary btn-cart" onclick="policy_buy(tempObj)">' +
                    '<i data-feather="shopping-cart"></i>' +
                    '<span class="add-to-cart">Buy</span>' +
                    '</a>' +
                    '</div>' +
                    '</div>';
            }



            counter++;
        });
    });
    // $("[name=sendOBJ]").val(element);
    // $("#sendOBJ").submit();


    $('#ecommerce-products').html(html_to_add);
}


function append_html_to_sponsered_cards(response) {

    html_to_add = '<div class="col-lg-3">' +
        '</div>';
    for (var i = 0; i < response.response.data.length; i++) {
        html_to_add += '<div class="col-lg-3">' +
            '<div class="a-box">' +
            '<div class="img-container">' +
            '<div class="img-inner">' +
            '<div class="inner-skew">' +
            '<img src="' + asset + '/' + response.response.data[i][0].image + '" alt="' + response.response.data[i][0].name + '" style="width:fit-content">' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="text-container">' +
            '<h3>' + response.response.data[i][0].name + '</h3>' +
            '<div>' +
            response.response.data[i][0].annual + '$' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="col-lg-2"></div>';

        if (i == 1)
            break;

    }


    $('#sponsered_cards').html(html_to_add);
}


function append_results_row(response) {
    var counter = 0;
    $.each(response.response.data, function (key, value) {
        counter += value.length;
    });

    $('.result-heading').html(counter + ' results found');

}




function FilterSuccessFuntion(response) {

    // console.log(response);

    // $('#ecommerce-products-div').html(response);
    // $('#ecommerce-products').html(response);

    // console.log(response);
    append_html_to_main_cards(response);
    append_html_to_sponsered_cards(response);
    append_results_row(response);
    var horizontalWizard = document.querySelector('.horizontal-wizard-example');
    var numberedStepper = new Stepper(horizontalWizard); //initializing the stepper here 
    numberedStepper.next();
    // console.log(response);
}

function FilterFailedFunction(response) {
    if (response.status == 409) {
        toastr["error"](response.responseJSON.response, response.responseJSON.message, {
            closeButton: true,
            tapToDismiss: false,
            progressBar: true,
            // rtl: isRtl,
        });
    } else {
        $.each(response.responseJSON.errors, function (key, name) {
            toastr["error"](name, key, {
                closeButton: true,
                tapToDismiss: false,
                progressBar: true,
                // rtl: isRtl,
            });
        });
    }


    console.log(response);
}

function policy_view(counter) {
    // console.log(results_object[counter]);
    $("[name=sendOBJ]").val(JSON.stringify(results_object[counter]));
    $("#sendData").submit();
}

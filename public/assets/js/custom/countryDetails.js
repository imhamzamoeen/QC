$(document).ready(function () {
    $(".country-dropdown").on("change", function () {
        var country_id = this.value;
        $.ajax({
            url: GET_STATES_ENDPOINT,
            type: "GET",
            beforeSend: function () {
                $(".state-dropdown").html(
                    '<option value="">Please wait...</option>'
                );
            },
            data: {
                country_id: country_id,
            },
            dataType: "json",
            success: function (result) {
                $(".state-dropdown").html("<option disabled selected>Choose Any </option>");
                $.each(result.states, function (key, value) {
                    $(".state-dropdown").append(
                        '<option value="' +
                        value.state_id +
                        '">' +
                        value.state_name + ' ( ' + value.state_id + ' )' +
                        "</option>"
                    );
                });
                $(".city-dropdown").html(
                    '<option value="">Select State First</option>'
                );
            },
        });
    });
    // $(".state-dropdown").on("change", function () {
    //     var state_id = this.value;
    //     var state_name = this.options[this.selectedIndex].text;
    //     $.ajax({
    //         url: GET_CITIES_ENDPOINT,
    //         type: "GET",
    //         beforeSend: function () {
    //             $(".city-dropdown").html(
    //                 '<option value="">Please wait...</option>'
    //             );
    //         },
    //         data: {
    //             state_id: state_id,
    //             state_name: state_name,
    //         },
    //         dataType: "json",
    //         success: function (result) {
    //             // console.log(result);
    //             $(".city-dropdown").html("");
    //             $.each(result.cities, function (key, value) {
    //                 $(".city-dropdown").append(
    //                     '<option value="' +
    //                     value.id +
    //                     '">' +
    //                     value.name +
    //                     "</option>"
    //                 );
    //             });
    //             $(".zip-dropdown").html("");
    //             $.each(result.zips, function (key, value) {
    //                 $(".zip-dropdown").append(
    //                     '<option value="' +
    //                     value.id +
    //                     '">' +
    //                     value.zip +
    //                     "</option>"
    //                 );
    //             });
    //         },
    //     });
    // });

    $(".state-dropdown").on("change", function () {
        var state_id = this.value;
        // var state_name = this.options[this.selectedIndex].text;
        $.ajax({
            url: GET_CITIES_ENDPOINT,
            type: "GET",
            beforeSend: function () {
                $(".city-dropdown").html(
                    '<option value="">Please wait...</option>'
                );
            },
            data: {
                state_id: state_id,
                // state_name: state_name,
            },
            dataType: "json",
            success: function (result) {
                $(".city-dropdown").html("<option disabled selected>Choose Any </option>");
                $.each(result.cities, function (key, value) {
                    $(".city-dropdown").append(
                        '<option value="' +
                        value.city +
                        '">' +
                        value.city +
                        "</option>"
                    );
                });
                $(".zip-dropdown").html('<option value="">Please select a city</option>');

            },
        });
    });

    $(".city-dropdown").on("change", function () {

        // var country_name = $('.country-dropdown option:selected').text();
        var city_name = $('.city-dropdown option:selected').text();
        // var state_name = $('.state-dropdown option:selected').text();
        $.ajax({
            url: GET_ZIP_ENDPOINT,
            type: "GET",
            beforeSend: function () {
                $(".zip-dropdown").html(
                    '<option value="">Please wait...</option>'
                );
            },
            data: {
                // country_name: country_name,
                city_name: city_name,
                // state_name: state_name,
            },
            dataType: "json",
            success: function (result) {
                $(".zip-dropdown").html("");
                $.each(result.zips, function (key, value) {
                    $(".zip-dropdown").append(
                        '<option value="' +
                        value.id +
                        '">' +
                        value.zip +
                        "</option>"
                    );
                });
            },
        });
    });
});

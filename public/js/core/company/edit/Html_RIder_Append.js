function AddCHILDHtml(DivName, counter) {
    // console.log(DivName);
    lower_div_name = DivName.toLowerCase();
    quote = "'";
    inputCounter = 0;
    if (DivName == "Whole") {
        if (child_whole_counter < 0) {
            child_whole_counter = counter + 1;
        }
        inputCounter = child_whole_counter;
    } else if (DivName == "Term") {
        if (child_term_counter < 0) {
            child_term_counter = counter + 1;
        }
        inputCounter = child_term_counter;
    }
    // console.log(inputCounter);



    html_to_add = '<div class="row d-flex align-items-end" id="' + DivName + '_CHILD_' + inputCounter + '">' +
        '<div class="col-md-4 col-12">' +
        '<div class="mb-1">' +
        '<label class="form-label" for="itemname">Type </label>' +
        '<select class="form-select type_' + lower_div_name + '_class"  name="child_rider_repeater_' + lower_div_name + '[' + inputCounter + '][type_' + lower_div_name + ']" placeholder="Select Policy Type" required>' +
        '<option value="Monthly">Monthly</option>' +
        '<option value="Quarterly">Quarterly</option>' +
        '<option value="Semi-Annual">Semi-Annual</option>' +
        '<option value="Annual">Annual</option>' +
        '</select>' +
        '</div>' +
        '</div>' +
        '<div class="col-md-2 col-12">' +
        '<div class="mb-1">' +
        '<label class="form-label" for="itemcost">Whole Term  Rate</label>' +
        '<input type="number"class="form-control whole_term_rate_' + lower_div_name + '_class" value="0.0" name="child_rider_repeater_' + lower_div_name + '[' + inputCounter + '][whole_term_rate_' + lower_div_name + ']" aria-describedby="Rate for whole and Term" placeholder="$" required/>' +
        '</div>' +
        '</div>' +
        '<div class="col-md-2 col-12">' +
        '<div class="mb-1">' +
        '<label class="form-label" for="itemquantity">20 Pay Rate</label>' +
        '<input type="number" class="form-control 20pay_rate_' + lower_div_name + '_class"  value="0.0" name="child_rider_repeater_' + lower_div_name + '[' + inputCounter + '][20pay_rate_' + lower_div_name + ']" aria-describedby="Rate for 20 pay policy" placeholder="$" required/>' +
        '</div>' +
        '</div>' +
        '<div class="col-md-2 col-12 ">' +
        '<div class="mb-1">' +
        ' <button class="btn btn-outline-danger text-nowrap px-1" onclick="DeleteRiderHtml(' + quote + DivName + quote + ',' + inputCounter + ')" type="button">' +
        '<i data-feather="x" class="me-25"></i>' +
        '<span>Delete</span>' +
        '</button>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<hr />';
    IncrementRiderPhpVariable(DivName, "CHILD");

    $('.' + DivName + '_CHILD_div').append(html_to_add);
}




function AddADBHtml(DivName, counter) {
    // console.log(counter);
    // console.log(DivName);
    lower_div_name = DivName.toLowerCase();
    quote = "'";
    inputCounter = 0;
    if (DivName == "Whole") {
        if (adb_whole_counter < 0) {

            adb_whole_counter = counter + 1;
        }
        inputCounter = adb_whole_counter;
    } else if (DivName == "Term") {
        if (adb_term_counter < 0) {
            adb_term_counter = counter + 1;
        }
        inputCounter = adb_term_counter;
    }
    // console.log(inputCounter);



    html_to_add = '<div class="row d-flex align-items-end" id="' + DivName + '_ADB_' + inputCounter + '">' +
        '<div class="col-md-2 col-12">' +
        '<div class="mb-1">' +
        '<label class="form-label" for="itemname">Lower Age' +
        '</label>' +
        '<input type="number"  class="form-control lower_age_' + lower_div_name + '_class" name="adb_rider_div_' + lower_div_name + '[' + inputCounter + '][lower_age_' + lower_div_name + ']" aria-describedby="Starting Age" placeholder="0" required/>' +
        '</div>' +
        '</div>' +
        '<div class="col-md-2 col-12">' +
        '<div class="mb-1">' +
        '<label class="form-label" for="itemcost">Upper Age</label>' +
        '<input type="number"class="form-control upper_age_' + lower_div_name + '_class"  name="adb_rider_div_' + lower_div_name + '[' + inputCounter + '][upper_age_' + lower_div_name + ']" aria-describedby="Ending Age" placeholder="55" required/>' +
        '</div>' +
        '</div>' +

        '<div class="col-md-4 col-12">' +
        '<div class="mb-1">' +
        '<label class="form-label" for="itemquantity">Annual Rate</label>' +
        '<input type="number" class="form-control annual_rate_' + lower_div_name + '_class" name="adb_rider_div_' + lower_div_name + '[' + inputCounter + '][annual_rate_' + lower_div_name + ']"   aria-describedby="Price" placeholder="$" required/>' +
        '</div>' +
        '</div>' +
        '<div class="col-md-2 col-12 ">' +
        '<div class="mb-1">' +
        ' <button class="btn btn-outline-danger text-nowrap px-1" onclick="DeleteRiderHtml(' + quote + DivName + quote + ',' + inputCounter + ')" type="button">' +
        '<i data-feather="x" class="me-25"></i>' +
        '<span>Delete</span>' +
        '</button>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<hr />';
    IncrementRiderPhpVariable(DivName, "ADB");

    $('.' + DivName + '_ADB_div').append(html_to_add);
}





function DeleteRiderHtml(DivName, inputCounter) {
    // console.log(DivName);
    // console.log(inputCounter);
    DecrementRiderPhpVariable(DivName);
    $('#' + DivName + inputCounter).remove();
}

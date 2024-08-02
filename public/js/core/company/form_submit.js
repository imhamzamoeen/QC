var result_from_check_ages = true;
var GlobalFromData = new FormData();
$('.btn-submit').click(function (e) {
    GlobalFromData = new FormData();
    e.preventDefault();
    if (formula_filled_check == 0) {
        toaster('error', 'You have not filled any Formula', ' Company Add');
        return;
    }
    result_from_check_ages = true;
    if (formula_custom_check() == false) {
        toaster('error', 'Formula Step is not correctly made', ' Company Add');
        return;
    }
    if (checkages() == true) {
        makeformdata();
        // console.log("ab bhejny lga");
        // Ajax_Call_Dynamic(route_to_store,"POST",GlobalFromData,"company_create_success", "FailedToasterResponse");
        swal_ask('Add Company ', 'Add Company with provided detail', 'warning', 'yes, please create', 'Error', 'Action Stopped', 'info', 'Ajax_Call_Dynamic', route_to_store, "POST", GlobalFromData, "company_create_success", "FailedToasterResponse");

    } else {
        toaster('error', "Form Not Properly Filled", ' Company Add')
    }
    return;
});


function company_create_success(response) {
    toaster("success", "Company Added Successfully", "Company Add");


    setTimeout(() => {
        location.reload();
    }, 1000);




}



$(".mark-read").click(function (e) {
    e.preventDefault();
    makeBtnLoader("mark-read", "btn-load-spinner");
    dynamicAjax(markReadRoute, "post", "", "allReadajax", "notifications");
});

function allReadajax(response, arg2 = "notifications") {
    // console.log("response from call back");
    // console.log(response);
    removeBtnLoader("mark-read", "btn-load-spinner");
    if (response.status == 200) {
        makeToaster("success", "😃 Yeepii! Successful !", response.response);
        refreshNotficationDivs();
        $(".mark-read").prop("disabled", true);
    } else makeToaster("failed", "😢 Oops! Failed !", response.response);
}

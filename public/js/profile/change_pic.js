$("#pro1").click(function (e) {
    $("#file_pic").click();
});

function image_change() {
    $("#file_pic").click();
};

function fasterPreview(uploader) {
    if (uploader.files && uploader.files[0]) {
        $('.edit-user-img').attr('src',
            window.URL.createObjectURL(uploader.files[0]));
    }
}

$("#file_pic").change(function () {
    fasterPreview(this);
    change_pic();
});

function change_pic() {
    var image = $("#file_pic")[0].files[0];
    var formdata = new FormData();
    formdata.append('pic', image);
    Ajax_Call_Dynamic(route_to_update_pic, 'POST', formdata, "ProfilePicUpdate", "FailedToasterResponse");

}


function ProfilePicUpdate(response){

    toaster('success',response.response,'Profile');
}


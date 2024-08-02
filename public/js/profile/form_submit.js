$('.edit-btn').click(function (e) { 
    e.preventDefault();
    $('#ProifleUpdateForm').submit();
    
});

$('#ProifleUpdateForm').submit(function (e) { 
    e.preventDefault();
        var quote='"';
        formdata=new FormData();
     FromData=new FormData($(this)[0]);

    for (let [key, value] of FromData) {

    if(value!=''){
       formdata.append(key,value)
        }
    }

    var action=$(this).attr('action');
    var method = $(this).attr('method');
    swal_ask('Update Profile ', 'Update Profile with provided detail', 'warning', 'yes, please Update', 'Error', 'Action Stopped', 'info', 'Ajax_Call_Dynamic', action, method, formdata, "ProfileUpdateSuccess", "FailedToasterResponse");

    
});
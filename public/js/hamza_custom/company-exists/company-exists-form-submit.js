$('#company-state-exists-form').submit(function (e) { 
    e.preventDefault();
    var formdata=new FormData($(this)[0]);
    var action=$(this).attr('action');
    var method=$(this).attr('method');
    
    if($(this).valid()){
        // this.submit();
        toastr["info"]('File Upload', 'We are trying to send youe file.it may take some time ', {
            closeButton: true,
            tapToDismiss: false,
            progressBar: true,
            // rtl: isRtl,
        });
        Ajax_Call_Dynamic(action,method,formdata,"FileUploadSuccessful","FileUploadFailed")
    }
   
    
});
function FileUploadSuccessful(response){

    toastr["success"]("File Import", response.message, {
        closeButton: true,
        tapToDismiss: false,
        progressBar: true,
        // rtl: isRtl,
    });
}
function FileUploadFailed(response){
    // console.log(response);
    if(response.status==409){
        toastr["error"](response.responseJSON.response, response.responseJSON.message, {
            closeButton: true,
            tapToDismiss: false,
            progressBar: true,
            // rtl: isRtl,
        });
  }
  else{
    $.each(response.responseJSON.errors, function (key, name) {
      toastr["error"](name, key, {
          closeButton: true,
          tapToDismiss: false,
          progressBar: true,
          // rtl: isRtl,
      });
  });
  }
     
}
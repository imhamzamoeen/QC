function printerror(response) {
    console.log(response);
    if(response.status==409){
        toastr["error"](response.responseJSON.response, response.responseJSON.message, {
            closeButton: true,
            tapToDismiss: false,
            progressBar: true,
            // rtl: isRtl,
        });
  }
  else if (response.status==500){
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
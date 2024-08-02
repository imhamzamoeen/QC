

$('.check_factor').click(function (e) { 
    // e.preventDefault();
    makeFormData();
    toastercheckshow();
    Ajax_Call_Dynamic(route_to_calculate_factor,"POST",formdata,"FactorCalculateSuccess","printerror")
  
    
});

$('#childrens').keyup(function (e) { 
    // e.preventDefault();
    makeFormData();
    toastercheckshow();
    Ajax_Call_Dynamic(route_to_calculate_factor,"POST",formdata,"FactorCalculateSuccess","printerror")

});

function makeFormData(){
     formdata=new FormData(($('#rider_form')[0]));
    
}

function toastercheckshow(){
    if(formdata.has('legacy_rider') ||  formdata.has('adb_rider') ||  formdata.has('child_rider')) {
        toastr["success"]( "Results With Riders","Riders Being Calculated 🤑", {
            closeButton: true,
            tapToDismiss: false,
            progressBar: true,
            // rtl: isRtl,
        });
    }else{
        toastr["info"]( "Results Without Riders","Result Reverting  🤮 ", {
            closeButton: true,
            tapToDismiss: false,
            progressBar: true,
            // rtl: isRtl,
        });
    }
}


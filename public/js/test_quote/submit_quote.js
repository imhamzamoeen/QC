$('.btn-submit-form').click(function (e) { 
    e.preventDefault();
    var Global = new FormData();
    //becasuse we are changing the last button of form wizard functionality .. to we are validating the last wizard here 
    var isValid = $(this).parent().siblings('form').valid();
    if (isValid) {
        var action = route_to_add_quote;
        var method = "POST";
        var Forms=['comapny_details','policy_info','policy_features','image'];
        Forms.forEach(element => {
           var formData= new FormData($('#'+element)[0]);
            for (let [key, value] of formData) {
                Global.append(key, value); 
              }
        });
        // for (let [key, value] of Global) {
        //     console.log(`${key}: ${value}`)
        //   }
          if(dynamicAjax(action, method, Global)==true){
            $('#comapny_details').trigger("reset");
            $('#policy_info').trigger("reset");
            $('#policy_features').trigger("reset");
            $('#image').trigger("reset");
            var horizontalWizard = document.querySelector('.horizontal-wizard-example');
            var numberedStepper = new Stepper(horizontalWizard);
            numberedStepper.previous();      //yeh form wizard ko shru mai le ata 
            // Swal.fire({
            //   icon: 'success',
            //   title: 'Quote!',
            //   text: 'Quote Submitted Successfully.',
            //   customClass: {
            //     confirmButton: 'btn btn-success'
            //   }
            // });
          
          }
          else{
            // Swal.fire({
            //     icon: 'error',
            //     title: 'Quote!',
            //     text: 'Quote Could not be sent',
            //     customClass: {
            //       confirmButton: 'btn btn-success'
            //     }
            //   });
          }

    }
 
});
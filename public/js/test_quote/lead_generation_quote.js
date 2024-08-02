function policy_buy(response){
    // this ajax will send mail to the user and will make a lead also 
    var formData= new FormData();
    for (var key in response){
        // console.log(key, response[key]);
        formData.append(key,response[key]);
        }
        formData.append('user_name',$('#first_name').val())
        formData.append('user_phone',$('#phone-number').val())
        formData.append('user_email',$('#user_email').val())
        // for (let [key, value] of formData) {
           
        //     console.log(`${key}: ${value}`)
        //   }
  
    Ajax_Call_Dynamic_html(route_to_lead,"POST",formData,"LeadSuccessFuntion","LeadFailedFunction")
    // console.log(response);
  }

  function LeadSuccessFuntion(response){
      console.log(response)
    toastr["success"](response.message, 'Quote Submission', {
        closeButton: true,
        tapToDismiss: false,
        progressBar: true,
        // rtl: isRtl,
    });
  }

  function LeadFailedFunction(response){
    toastr["error"]('Sorry there is system error', 'Quote Submission', {
        closeButton: true,
        tapToDismiss: false,
        progressBar: true,
        // rtl: isRtl,
    });
}
function policy_view(counter) {
   
    // console.log(results_object[counter]);
 
    $("[name=sendOBJ]").val(JSON.stringify(results_object[counter]));
    $("#sendData").submit();
  }
  
$(document).on('click', '.pagination a', function(event){
    event.preventDefault(); 
    var page = $(this).attr('href').split('page=')[1];
    fetch_data(page);
   });
  
   function fetch_data(page)
   {

    $.ajax({
     url:url+page,
     method:tariqa,
     data:formData,
     contentType: false,
     processData: false,
     success:function(data)
     {
      $('#ecommerce-products-div').html(data);
     }
    });
   }





   //pagination works with ajax 

// paignation aisy work krti h k aap ek div ko id assign krti h 
// aur ek click k oper aap us div mai html render krwaty
// agr ap us div ki html ya pagination ko change krty hn tu 
// tu ap n ek aur function likhni k jis us link par parha hua data aata h 
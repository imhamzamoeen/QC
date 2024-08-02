$('.filter-button').click(function (e) { 
    e.preventDefault();
   

    coverage=($('input[name="coverage-filter"]:checked').val());          //this is returning me the coverage
    form_chosen=$('#policy_filters').val();
   

    formData=new FormData($('#'+form_chosen+'_form')[0]);
    formData.append('coverage', coverage);              //coverage amount
    formData.append('policy_tpye', form_chosen);              //konsa form submit ho rha h
    if(form_chosen=="Health"){
            //agar us n health wala select kia h tu yeh 2 valyes append kro form data mai 
            var slider = document.getElementById('price-slider');
            var sliderOptions = slider.noUiSlider.get();   // getting values of a slider 
        formData.append('lower_age', sliderOptions[0]);     
        formData.append('upper_age', sliderOptions[1]);  
    }
    if ($('#'+form_chosen+'_form').valid()) {
        $.ajax({
            url:"/data_fetch",
            method:"post",
            data:formData,
            processData: false, // Don't process the files
            contentType: false, // Set content type to false as jQuery will tell the server its a query string request
            success:function(data)
            {
             $('#ecommerce-products-div').html(data);
            }
           });
        // Ajax_Call_Dynamic(route,'post',formData,"FilterSuccess","FilterFail");
    }
    


});

function FilterSuccess(response){
    // console.log(response);
    var html_to_add='';
    var html_to_sponsered= '<div class="col-lg-3"></div>';
    var quote='"';
    $('#sponsered_cards').html(''); 
    $.each(response.response.data.data, function (key, name) {
        
        if(key<2){
            html_to_sponsered+='<div class="col-lg-3">'+
               '<div class="a-box">'+
                   '<div class="img-container">'+
                     '<div class="img-inner">'+
                      '<div class="inner-skew">'+
                         '<img src="'+asset+'/'+name.image+'" alt="'+name.company_name+'" style="width:fit-content">'+
                       '</div>'+
                    '</div>'+
                   '</div>'+
                   '<div class="text-container">'+
                     '<h3>'+name.company_name+'</h3>'+
                     '<div>'+
                  name.basic_amount+"000$"+
                   '</div>'+
                 '</div>'+
               '</div>'+
               '</div>'+
               '<div class="col-lg-2"></div>';
              
        }
        html_to_add+='<div class="card ecommerce-card">'+
        '<div class="item-img text-center">'+
                    '<a href="#">'+
                '<img class="img-fluid card-img-top" style="height:fit-content;width:fit-content " src="'+asset+'/'+name.image+'" alt="'+name.company_name+'" /></a>'+
        '</div>'+
        '<div class="card-body">'+
            '<div class="item-wrapper">'+
                '<div class="item-rating">'+
                    '<ul class="unstyled-list list-inline">';
                    for (let i = 0; i < name.rating; i++) {
                        html_to_add+='<li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>';
                    }
                    html_to_add+='</ul>'+
                '</div>'+
                '<div>'+
                    '<h6 class="item-price">'+name.basic_amount+"000$"+'</h6>'+
                '</div>'+
            '</div>'+
            '<h6 class="item-name">'+
                '<a class="text-body" href="#">'+name.company_name+'</a>'+
                '<span class="card-text item-company">mail <a href="#" class="company-name">'+name.company_email+'</a></span>'+
            '</h6>'+
            '<p class="card-text item-description">'+
               name.features+
            '</p>'+
       '</div>'+
        '<div class="item-options text-center">'+
            '<div class="item-wrapper">'+
                '<div class="item-cost">'+
                    '<h4 class="item-price">'+ name.basic_amount+"000$"+'</h4>'+
                '</div>'+
            '</div>'+
            '<a href="#" class="btn btn-light btn-wishlist">'+
                '<i data-feather="heart"></i>'+
               '<span>Add to Wish List</span>'+
            '</a>'+
            '<a href="#" class="btn btn-primary btn-cart">'+
                '<i data-feather="shopping-cart"></i>'+
                '<span class="add-to-cart">Buy</span>'+
           '</a>'+
        '</div>'+
    '</div>';
     
    });
    $('#ecommerce-products').html(html_to_add);
   $('#sponsered_cards').html(html_to_sponsered);
   $('.paginate-links').html(response.response.data.links());
    $('.result-heading').html(response.response.data.data.length+" results found");
}

function FilterFail(response){
    $.each(response.responseJSON.errors, function (key, name) {
        toastr["error"](name, key, {
            closeButton: true,
            tapToDismiss: false,
            progressBar: true,
            // rtl: isRtl,
        });
    });
}


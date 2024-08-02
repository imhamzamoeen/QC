$('#policy_filters').change(function (e) { 
    e.preventDefault();
    form_chosen=$('#policy_filters').val();
    $('#policy_heading').html(form_chosen+' insurance');
    form_chosen=$('#policy_filters').val();
    $('form[name="filter_form"]').each(function() {
        if(this.id==form_chosen+'_form'){
            $("#"+this.id).show()
        }
        else{
            $("#"+this.id).hide()
        }
     
     });

   
});


$('#car_brand').change(function (e) { 
    e.preventDefault();
    brand_chosen=$('#car_brand').val();
        if(brand_chosen==undefined || brand_chosen=='')
            return;
    var add_hmtl='';
    for (let i=0;i<Math.floor(Math.random() * 15)+1;i++){
       value=(Math.random() + 1).toString(36).substring(7);
        add_hmtl+='<option value='+value+' >'+value+'</option>';
       
    }
    $('.car_model_auto_form').show();
    $('#car_model').html(add_hmtl);
   
    
});

$('#car_model').change(function (e) { 
    e.preventDefault();
    $('.car_year_auto_form').show();
    
});

$('#car_year').change(function (e) { 
    e.preventDefault();
    $('.car_price_auto_form').show();
    
});
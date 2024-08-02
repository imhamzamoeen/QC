function OpenModal(id){
    
    Ajax_Call_Dynamic('/dashboard/insurance-company/'+id+'',"GET",{},"OpenModalSuccess", "FailedToasterResponse");
}

function OpenModalSuccess(response){
    $('#name').val(response.response.data.name);
    $('#id').val(response.response.data.id);
    $('#email').val(response.response.data.email);
    $('#existance_name').val(response.response.data.existance_name);
    $('#description').val(response.response.data.description);
    $('#address').val(response.response.data.address);
    $('#primary_contact').val(response.response.data.primary_contact);
    $('#secondary_contact').val(response.response.data.secondary_contact);
    $('#func_name').val(response.response.data.func_name);
    $('#old_img').attr("src", asset+'images/Insurance_Companies/'+response.response.data.company_image);


    object_id=response.response.data.id;

    $('#ModalForcompanyEdit').modal('show');
  

}

$('#UpdateNewCompanyForm').submit(function (e) { 
    e.preventDefault();
    
    var formdata=new FormData($(this)[0]);
   
    var insuranceCompany=formdata.get('id');
    Ajax_Call_Dynamic('/dashboard/update_company/'+insuranceCompany+'',"POST",formdata,"UpdateSuccess", "FailedToasterResponse");

    
});

function UpdateSuccess(response){
    toaster("success",response.response,'Company Update');



$('.ic-table').DataTable().ajax.reload();


$('#UpdateNewCompanyForm').trigger("reset");
$('#ModalForcompanyEdit').modal('hide');
}
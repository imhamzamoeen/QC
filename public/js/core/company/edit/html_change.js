$('#UpdateOptionSelect').change(function (e) {
    // 
    var option = $('#UpdateOptionSelect').val();
    if (option == "formula") {
        html_to_add = "<button type='button' style='float: right' onclick='UpdateFormula();'  class='btn btn-relief-success fomula_update_btn'>Update Formula</button>";
    } else if (option == "factors") {
        html_to_add = "<button type='button' style='float: right' onclick='UpdateFactor();'  class='btn btn-relief-success fomula_update_btn'>Update Factor</button>";
    } else if (option == "riders") {
        html_to_add = "<button type='button' style='float: right' onclick='UpdateRiders();'  class='btn btn-relief-success fomula_update_btn'>Update Rider</button>";
    }
    $('.submit_buttton').html(html_to_add);
});

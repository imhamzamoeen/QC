$(function() {
    
    var type = $(this).data("name");
    type == "whole" ? class_to_add = "" : class_to_add = '_term'
    type == "whole" ?  last_class_add="" : last_class_add="_Term"
    var pre_class_name = "Company_Formula_For_";

    var variable_names = ['result_variable_', 'operand_one_select_', 'operator_one_select_', 'operand_two_select_']
    var year_names = ['annual', 'semi_annual', 'quarterly', 'monthly']

    
        //it means is ka accordian band h ab 
        year_names.forEach(element => {

            variable_names.forEach(element1 => {
                //add names to this type
                // $('.' + element1 + element + class_to_add).removeAttr('name');
                $('.' + element1 + element + class_to_add).each(function (index, item) {
                    $(this).removeAttr('name');
                    // console.log(item);
                });

            });

        });
  

    




});
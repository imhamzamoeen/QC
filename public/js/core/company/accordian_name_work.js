// $('query-string').hasClass('ui-state-active');

$('.accordion-button').click(function (e) {
    e.preventDefault();
    var type = $(this).data("name");
    type == "whole" ? class_to_add = "" : class_to_add = '_term'
    type == "whole" ?  last_class_add="" : last_class_add="_Term"
    var pre_class_name = "Company_Formula_For_";

    var variable_names = ['result_variable_', 'operand_one_select_', 'operator_one_select_', 'operand_two_select_']
    var year_names = ['annual', 'semi_annual', 'quarterly', 'monthly']
    var names = ['result_variable', 'operand1', 'Operator', 'operand2'];
    var counter = 0;
    var result = $(this).hasClass('collapsed');
    if (!result == true) {

        //it means is ka accordian khula h ab 
        year_names.forEach(element => {
            counter = 0;
            variable_names.forEach(element1 => {
                //add names to this type
                //not in this way ,,, 
                // $('.' + element1 + element + class_to_add).attr('name', names[counter]);

                // console.log('.' + element1 + element + last_class_add);

                $('.' + element1 + element + class_to_add).each(function (index, item) {
                    temp=element;
                        if(temp=="semi_annual")
                            element="semi_Annual" ;

                    class_name = pre_class_name + element[0].toUpperCase() + element.slice(1) + last_class_add;
                    // console.log(class_name);
                    $(this).attr('name', "" + class_name + "[" + index + "][" + names[counter] + "]"); //yeh comapnydev name hm n oper wala rkhna main div name 
                    // console.log(item);
                    element=temp;
                });
                counter++;
            });

        });
        formula_filled_check++;
    } else {
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
        formula_filled_check--;

    }


});

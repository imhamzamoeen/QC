function makeformdata() {
    var form1 = new FormData($('#addNewCompanyForm')[0]);
    var form2 = new FormData($('#factor_detail_form')[0]);
    var form3 = new FormData($('#company_rider_form')[0]);
    var form4 = new FormData($('#company_formula_form')[0]);

    for (let [key, value] of form1) {

        GlobalFromData.append(key, value);
    }
    for (let [key, value] of form2) {

        GlobalFromData.append(key, value);
    }
    for (let [key, value] of form3) {

        GlobalFromData.append(key, value);
    }
    for (let [key, value] of form4) {

        GlobalFromData.append(key, value);
    }
  

    if (GlobalFromData.has('Company_Formula_For_Annual[0][result_variable]') == true) {
        //it means k whole ka formula likha h 

        GlobalFromData.append('whole_formula_check', 'true');
    }
    if (GlobalFromData.has('Company_Formula_For_Annual_Term[0][result_variable]') == true) {
        //it means k whole ka formula likha h 

        GlobalFromData.append('term_formula_check', 'true');
    }

  


}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsuranceCompanyFormulaUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (auth()->user()->hasanyrole(['super_admin', 'admin'])) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "company_id" => ['required', 'string', 'exists:insurance_companies,id'],
            'whole_formula_check'=>'sometimes|required',
            'term_formula_check'=>'sometimes|required',

            'Company_Formula_For_Annual.*.result_variable' => 'required_with:Company_Formula_For_Annual.0.result_variable',
            'Company_Formula_For_Annual.*.operand1' => 'required_with:Company_Formula_For_Annual.0.result_variable',
            'Company_Formula_For_Annual.*.operand2' => 'required_with:Company_Formula_For_Annual.0.result_variable',
            'Company_Formula_For_Annual.*.Operator' => 'required_with:Company_Formula_For_Annual.0.result_variable',
            
            'Company_Formula_For_Semi_Annual.*.result_variable' => 'required_with:Company_Formula_For_Semi_Annual.0.result_variable',
            'Company_Formula_For_Semi_Annual.*.operand1' => 'required_with:Company_Formula_For_Semi_Annual.0.result_variable',
            'Company_Formula_For_Semi_Annual.*.operand2' => 'required_with:Company_Formula_For_Semi_Annual.0.result_variable',
            'Company_Formula_For_Semi_Annual.*.Operator' => 'required_with:Company_Formula_For_Semi_Annual.0.result_variable',
        
            'Company_Formula_For_Quarterly.*.result_variable' => 'required_with:Company_Formula_For_Quarterly.0.result_variable',
            'Company_Formula_For_Quarterly.*.operand1' => 'required_with:Company_Formula_For_Quarterly.0.result_variable',
            'Company_Formula_For_Quarterly.*.operand2' => 'required_with:Company_Formula_For_Quarterly.0.result_variable',
            'Company_Formula_For_Quarterly.*.Operator' => 'required_with:Company_Formula_For_Quarterly.0.result_variable',
        
            'Company_Formula_For_Monthly.*.result_variable' => 'required_with:Company_Formula_For_Monthly.0.result_variable',
            'Company_Formula_For_Monthly.*.operand1' => 'required_with:Company_Formula_For_Monthly.0.result_variable',
            'Company_Formula_For_Monthly.*.operand2' => 'required_with:Company_Formula_For_Monthly.0.result_variable',
            'Company_Formula_For_Monthly.*.Operator' => 'required_with:Company_Formula_For_Monthly.0.result_variable',


            'Company_Formula_For_Annual_Term.*.result_variable' => 'required_with:Company_Formula_For_Annual_Term.0.result_variable',
            'Company_Formula_For_Annual_Term.*.operand1' => 'required_with:Company_Formula_For_Annual_Term.0.result_variable',
            'Company_Formula_For_Annual_Term.*.operand2' => 'required_with:Company_Formula_For_Annual_Term.0.result_variable',
            'Company_Formula_For_Annual_Term.*.Operator' => 'required_with:Company_Formula_For_Annual_Term.0.result_variable',
            
            'Company_Formula_For_Semi_Annual_Term.*.result_variable' => 'required_with:Company_Formula_For_Semi_Annual_Term.0.result_variable',
            'Company_Formula_For_Semi_Annual_Term.*.operand1' => 'required_with:Company_Formula_For_Semi_Annual_Term.0.result_variable',
            'Company_Formula_For_Semi_Annual_Term.*.operand2' => 'required_with:Company_Formula_For_Semi_Annual_Term.0.result_variable',
            'Company_Formula_For_Semi_Annual_Term.*.Operator' => 'required_with:Company_Formula_For_Semi_Annual_Term.0.result_variable',
        
            'Company_Formula_For_Quarterly_Term.*.result_variable' => 'required_with:Company_Formula_For_Quarterly_Term.0.result_variable',
            'Company_Formula_For_Quarterly_Term.*.operand1' => 'required_with:Company_Formula_For_Quarterly_Term.0.result_variable',
            'Company_Formula_For_Quarterly_Term.*.operand2' => 'required_with:Company_Formula_For_Quarterly_Term.0.result_variable',
            'Company_Formula_For_Quarterly_Term.*.Operator' => 'required_with:Company_Formula_For_Quarterly_Term.0.result_variable',
        
            'Company_Formula_For_Monthly_Term.*.result_variable' => 'required_with:Company_Formula_For_Monthly_Term.0.result_variable',
            'Company_Formula_For_Monthly_Term.*.operand1' => 'required_with:Company_Formula_For_Monthly_Term.0.result_variable',
            'Company_Formula_For_Monthly_Term.*.operand2' => 'required_with:Company_Formula_For_Monthly_Term.0.result_variable',
            'Company_Formula_For_Monthly_Term.*.Operator' => 'required_with:Company_Formula_For_Monthly_Term.0.result_variable',
        ];
    }
}

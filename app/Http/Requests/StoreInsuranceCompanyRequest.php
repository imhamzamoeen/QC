<?php

namespace App\Http\Requests;

use ErrorException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreInsuranceCompanyRequest extends FormRequest
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
            'name' => 'string|required|max:100,unique:insurance_companies,name,NULL,id,deleted_at,NULL',
            'description' => "string|required",
            'existance_name'=>'string|required|unique:insurance_companies,existance_name,NULL,id,deleted_at,NULL',
            'email' => "email|unique:insurance_companies,email,NULL,id,deleted_at,NULL",
            'address' => "required|string",
            'primary_contact' => "numeric|required",
            'secondary_contact' => "nullable|numeric",
            'image' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'whole_factor_check' => 'nullable',
            'annual_mode_factor_whole' => 'required_with:whole_factor_check',
            'policy_fee_annual_whole' => 'required_with:whole_factor_check',
            'semi_annual_mode_factor_whole' => 'required_with:whole_factor_check',
            'policy_fee_semi_annual_whole' => 'required_with:whole_factor_check',
            'quarterly_mode_factor_whole' => 'required_with:whole_factor_check',
            'policy_fee_quarterly_whole' => 'required_with:whole_factor_check',
            'monthly_mode_factor_whole' => 'required_with:whole_factor_check',
            'policy_fee_monthly_whole' => 'required_with:whole_factor_check',
            'term_factor_check' => 'nullable',
            'annual_mode_factor_term' => 'required_with:term_factor_check',
            'policy_fee_annual_term' => 'required_with:term_factor_check',
            'semi_annual_mode_factor_term' => 'required_with:term_factor_check',
            'policy_fee_semi_annual_term' => 'required_with:term_factor_check',
            'quarterly_mode_factor_term' => 'required_with:term_factor_check',
            'policy_fee_quarterly_term' => 'required_with:term_factor_check',
            'monthly_mode_factor_term' => 'required_with:term_factor_check',
            'policy_fee_monthly_term' => 'required_with:term_factor_check',


            'adb_rider_div_whole.*.lower_age_whole' => 'required_with:adb_rider_div_whole.0.lower_age_whole|numeric',
            'adb_rider_div_whole.*.upper_age_whole' => 'required_with:adb_rider_div_whole.0.upper_age_whole|numeric',
            'adb_rider_div_whole.*.annual_rate_whole' => 'required_with:adb_rider_div_whole.0.annual_rate_whole|numeric',
            'child_rider_repeater_whole.*.whole_term_rate_whole' => 'required_with:child_rider_repeater_whole.0.whole_term_rate_whole|numeric',
            'child_rider_repeater_whole.*.20pay_rate_whole' => 'required_with:child_rider_repeater_whole.0.20pay_rate_whole|numeric',
            'child_rider_repeater_whole.*.type_whole' => 'required_with:child_rider_repeater_whole.0.type_whole|string',
            'max_child_supported_whole' => 'required_with:child_rider_repeater_whole.0.whole_term_rate_whole',
            'adb_rider_div_term.*.lower_age_term' => 'required_with:adb_rider_div_term.0.lower_age_term|numeric',
            'adb_rider_div_term.*.upper_age_term' => 'required_with:adb_rider_div_term.0.upper_age_term|numeric',
            'adb_rider_div_term.*.annual_rate_term' => 'required_with:adb_rider_div_term.0.annual_rate_term|numeric',
            'child_rider_repeater_term.*.whole_term_rate_term' => 'required_with:child_rider_repeater_term.0.whole_term_rate_term|numeric',
            'child_rider_repeater_term.*.20pay_rate_term' => 'required_with:child_rider_repeater_term.0.20pay_rate_term|numeric',
            'child_rider_repeater_term.*.type_term' => 'required_with:child_rider_repeater_term.0.type_term|string',
            'max_child_supported_term' => 'required_with:child_rider_repeater.0.whole_term_rate_term',

            'whole_formula_check'=>'nullable',
            'term_formula_check'=>'nullable',

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

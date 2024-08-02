<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsuranceCompanyFactorUpdateRequest extends FormRequest
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
            "company_id" => ['required', 'string', 'exists:company_formulas,company_id'],
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
        ];
    }
}

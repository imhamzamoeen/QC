<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsuranceCompanyRiderUpdateRequest extends FormRequest
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
        ];
    }
}

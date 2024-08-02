<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PolicyFileUpdateRequest extends FormRequest
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
            'function_name'=>['required','string','exists:insurance_companies,func_name'],
            'insurance_company_id'=>['required','exists:insurance_companies,id'],
            'company_policy_id'=>['required','exists:company_policies,id'],
            'file'=>['required','file']
        ];
    }
}

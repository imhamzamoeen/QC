<?php

namespace App\Http\Requests;

use ErrorException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreCompanyPolicyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Gate::allows('new-module'))
            return true;
        throw new ErrorException('Invalid Priviledges, you not authorized.');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
         
            'insurance_company_id' => "required|exists:insurance_companies,id",
            'file' => 'required|mimes:xlsx,csv,xls',
            'gender' => "required|in:male,female",
            'highlights' => "string|nullable",
            'issue_date' => "required|date",
            'policy_name' => "required|string",
            'policy_type' => "required|string",
            'level' => "required|string",
            'smoker_status' => 'nullable|in:smoker,non-smoker',
            'Company_features'=>'array|required',
            'Company_features[*][highlights]'=>'required|string|max:50',
            
        ];
    }
}

<?php

namespace App\Http\Requests\testQuote;

use App\Models\child_riders;
use App\Models\InsuranceCompany;
use Illuminate\Foundation\Http\FormRequest;
use Mockery\Undefined;

class CalculateAdditionalOptions extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'which_company' => ['required', 'exists:insurance_companies,name'],
            'which_policy' => ['required', 'exists:company_policies,policy_name'],
            'legacy_rider' => ['nullable', 'in:legacy'],
            'adb_rider' => ['nullable', 'in:adb'],
            'child_rider' => ['nullable', 'in:child'],
            'monthly_rate' => ['required'],
            'semi_annual_rate' => ['required'],
            'monthly_rate' => ['required'],
            'annual_rate' => ['required'],
            'age' => ['required'],
            'childrens' => ['nullable', 'min:0', 'max:100', 'required_with:child_rider'],
            'policy_type'=>['required','in:whole,term']

        ];
    }

    public function withValidator($validator)
    {

        if (! $validator->fails() ) {
            
            $validator->after(function ($validator) {
                if($this->request->get( 'childrens' )!= NULL){
                    $company_id=InsuranceCompany::where('name',$this->request->get( 'which_company' ))->value('id');
                    $max_child_of_company=child_riders::where('company_id',$company_id)->value('max_child_rider');
                    if($this->request->get( 'childrens' )>$max_child_of_company)
                    $validator->errors()->add('Childrens', 'This Insurance Company does not support that much children');
                }
              
            });

        }
        
    }
}

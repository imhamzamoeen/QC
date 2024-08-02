<?php

namespace App\Http\Requests\PolicyManagment;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePolicyManagmentRecordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(auth()->user()->hasanyrole(['super_admin','admin'])){
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
            //

            'company'=>['required','exists:insurance_companies,id'],
            'policy_name'=>['required'],
            'policy_id'=>['required','exists:company_policies,id'],
            'policy_type'=>['required','in:whole,term'],
            'policy_level'=>['required','in:limited,immediate,ROP2Y,ROP3Y,graded,term'],
        ];
    }
}

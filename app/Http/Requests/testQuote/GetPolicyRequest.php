<?php

namespace App\Http\Requests\testQuote;

use Illuminate\Foundation\Http\FormRequest;

use function PHPSTORM_META\map;

class GetPolicyRequest extends FormRequest
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
            'first_name'=>'nullable|string',
            'last_name'=>'nullable|string',
            'phone'=>'nullable|string|size:14',
            'user_email'=>'nullable|email',
            'gender'=>'required|in:male,female',
            'policy_type'=>'required|in:whole,term', 
            'policy_level'=>'required|in:immediate,graded,ROP2Y,ROP3Y,limited,term',   //isko bad mai required krna h
            'age'=>'required|max:120|min:0',
            'coverage'=>'required',
            'adb_factor'=>'nullable',
            'child_factor'=>'nullable',
            'childrens'=>'required_with:child_factor|numeric|min:1|max:24',
            'legacy_rider'=>'nullable',
            'smoker_status'=>'required|in:smoker,non-smoker'
          
        ];
    }
}

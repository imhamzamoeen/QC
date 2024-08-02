<?php

namespace App\Http\Requests\TestLab\Policy;

use ErrorException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LBLPolicy extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       if(auth()->user()->hasrole('super_admin')){
           return true;
       }
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
            'policy_type'=>'required',
            'gender'=>'required|in:male,female',
            'smoker_status'=>'required|in:smoker,non-smoker',
            'file'=>'required|file'
        ];
    }
}

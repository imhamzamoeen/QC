<?php

namespace App\Http\Requests;

use ErrorException;
use Illuminate\Foundation\Http\FormRequest;

class StoreSeniorLifeInuranceRequest extends FormRequest
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
            'gender'=>'required',
            'smoker_status'=>'nullable',
            'file'=>'required|file'
        ];
    }
}

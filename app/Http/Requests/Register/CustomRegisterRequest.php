<?php

namespace App\Http\Requests\Register;

use Illuminate\Foundation\Http\FormRequest;

class CustomRegisterRequest extends FormRequest
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
            'name'=>['required','string','max:30'],
            'email'=>['required','email','unique:users,email,NULL,id,deleted_at,NULL'],
            'password'=>['required','min:8'],
            'user_type'=>['required','in:admin,super_admin,agent'],
            'file'=>['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048']

        ];
    }
}

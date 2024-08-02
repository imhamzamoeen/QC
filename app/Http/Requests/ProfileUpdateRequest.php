<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'id'=>['required','exists:users,id'],
            'name' => 'sometimes|max:100',
            'email' => ['sometimes','email','max:255','unique:users,email,'.$this->id.',id'],    
            'password'=>['sometimes','min:8','string'],

           
        ];
    }
}

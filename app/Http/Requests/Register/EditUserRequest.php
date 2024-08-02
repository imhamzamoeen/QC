<?php

namespace App\Http\Requests\Register;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'id'=>'required|exists:users,id',
            'name'=>'required|string|max:30',
            'email'=>['required','unique:users,email,'.$this->id.',id'],
            'user_type'=>'required|in:admin,super_admin,agent',
            'status'=>'required|in:active,inactive',
        
        ];
    }
}

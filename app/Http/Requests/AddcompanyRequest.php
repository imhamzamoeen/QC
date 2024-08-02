<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddcompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (auth()->user()->hasanyrole(['super_admin', 'admin']))
            return true;
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
            'company_name' => ['required', 'unique:company_exists,company', 'string', 'max:15', 'regex:/(^[a-zA-Z]+[a-zA-Z0-9\\-]*$)/u'],
            'states' => ['required', 'array'],
        ];
    }
    public function messages()
    {
        return [
            'company_name.regex' => "No Space and Special Character Allowed"
        ];
    }
}

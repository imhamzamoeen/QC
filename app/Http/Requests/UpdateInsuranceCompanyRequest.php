<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInsuranceCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (auth()->user()->hasanyrole(['super_admin', 'admin'])) {
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
            'id'=>['required','exists:insurance_companies,id'],
            'name' => 'string|required|max:100,unique:insurance_companies,name,'.$this->id.',id',
            'description' => "string|required",
            'existance_name'=>'string|required|unique:insurance_companies,existance_name,'.$this->id.',id',
            'email' => ['required','string','max:255','unique:insurance_companies,email,'.$this->id.',id'],    
            'address' => "required|string",
            'primary_contact' => "numeric|required",
            'secondary_contact' => "nullable|numeric",
            'image' => 'sometimes|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}

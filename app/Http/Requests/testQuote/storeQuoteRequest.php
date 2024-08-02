<?php

namespace App\Http\Requests\testQuote;

use Illuminate\Foundation\Http\FormRequest;

class storeQuoteRequest extends FormRequest
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
            
            'pic'=>['required','mimes:jpeg,jpg,png','file'],
            'company_name'=>['required','string','max:150'],
            'company_email'=>['required','string','email'],
            'basic_amount'=>['string','required'],
            'age'=>['required','string'],
            'features'=>['required','array'],
        ];
    }
    public function messages()
    {
        return [
            
            'image.required' =>'Image field is missing',
            'company_name.required' =>'company name is required',
            'company_email.email'=>'comapny email is not valid',
            'basic_amount.required' =>'Basic amount is missing ',
            'age.required' =>'Age is required',
            'features.required' =>'Add some features please ',
        ];
    }
}

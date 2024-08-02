<?php

namespace App\Http\Requests\testquote;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;



class filterQuoteRequest extends FormRequest
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
            'policy_tpye'=>'required|string|in:Investment,Car,Health,Life',
            'upper_age'=>'required_if:policy_tpye,==,Health',
            'lower_age'=>'required_if:policy_tpye,==,Health',
            'coverage'=>'required',
            'car_brand'=>'required_if:policy_tpye,==,Car',
            'car_model'=>'required_if:policy_tpye,==,Car',
            'car_year'=>'required_if:policy_tpye,==,Car',
            'expected_price'=>'required_if:policy_tpye,==,Car',
            'investment_amount'=>'required_if:policy_tpye,==,Investment',
            'DOB'=> 'required_if:policy_tpye,==,Life', 



            
        ];
    }

     // Here we can do more with the validation instance...
    //  public function withValidator($validator)
    //  {
    //      $validator->after(function ($validator) {
    //          if ($this->input('policy_tpye')=="Life") {
    //              $validator->errors()->add('SystemErorr', 'This feature is not available!');
    //          }
    //      });
    //  }
   
}

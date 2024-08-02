<?php

namespace App\Http\Requests;

use App\Services\JsonResponseService;
use ErrorException;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserCompanyManagementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(auth()->user()->hasanyrole(['super_admin','admin'])){
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
            'companies'=>['required','array'],
            'companies.*'=>['exists:insurance_companies,existance_name'],
            'user_id'=>['required','exists:users,id'],
            'filter_check'=>['required','in:rating,annual'],
        ];
    }
}

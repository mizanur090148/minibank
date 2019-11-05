<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepositRequest extends FormRequest
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
     * Get the validation messages that apply to the erroneous request.
     *
     * @return bool
     */
    public function messages()
    {
        return [            
            'amount.gt' => 'Enter more than 0',
            'amount.digits_between' => 'Enter 1 to 10 digits'           
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [            
            'amount' => 'required|numeric|gt:0|regex:/^\d+(\.\d{1,4})?$/',
        ];
    }
}

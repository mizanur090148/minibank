<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionProfileRequest extends FormRequest
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
    /*public function messages()
    {
        return [            
            'amount.gt' => 'Enter more than 0',
            'amount.digits_between' => 'Enter 1 to 10 digits'           
        ];
    }*/

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [            
            'inquiry_date' => 'required|date',
            'inquiry_reference_no' => 'required:max:255',
            'item_particulars' => 'required:max:255',
            'applicant' => 'required:max:255',
            'lc_issuing_bank' => 'required:max:255',
            'beneficiary' => 'required:max:255',
            'beneficiary_bank' => 'required:max:255',
            'swift_code' => 'required:max:255',
            'proforma_invoice_no' => 'required:max:255',
            'invoice_value' => 'required:max:255',
            'shipment_date' => 'required:max:255'
        ];
    }
}

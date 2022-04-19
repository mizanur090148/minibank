<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'first_name'        => 'required|max:30',
            'last_name'         => 'required|max:20',
            'mobile_no'         => 'required|max:20',
            'address'           => 'required|max:60',            
            'personal_code'     => 'required|min:10|max:30|unique:users',
            'email'             => 'required|email|max:50|unique:users',
            'password'          => 'required|min:6|same:confirm_password',
            'confirm_password'  => 'required'
        ];
    }
}

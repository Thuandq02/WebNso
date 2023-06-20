<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRegisterUser extends FormRequest
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
            'username' => 'required|string',
            'password' => 'required',
            'phone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'User is required',
            'password.required' => 'Password is required',
            'phone.required' => 'Phone is required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',                       
            'password' => 'nullable|min:6|confirmed',
            'password_confirmation' => 'nullable|required_with:password|same:password|min:6'
        ];
    }

    public function messages()
    {
        return [
            //'name.required'  => 'description minimum length bla bla bla'
        ];
    }

}

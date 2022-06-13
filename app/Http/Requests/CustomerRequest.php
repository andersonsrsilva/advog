<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            // 'cnh' => 'required',
            // 'passport' => 'required',
            'mobile_phone' => 'required',
            // 'home_phone' => 'required',
            'zip_code' => 'required',
            'address' => 'required',
            // 'number_address' => 'required',
            // 'other_address' => 'required',
            'district_address' => 'required',
            //'city_id' => 'required',
            'uf_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
           // 'name.required'  => 'description minimum length bla bla bla'
        ];
    }

}

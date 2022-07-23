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
            'name' => 'required|min:6',
            'email' => 'required',
            'cpf' => 'required|cpf|formato_cpf',
            //'mobile_phone' => 'required|celular|celular_com_ddd',
            'address' => 'required',
            'number_address' => 'required',
            'district_address' => 'required',
            'ibge_code' => 'required_without:city_select',
            'city_select' => 'required_without:ibge_code',
        ];
    }

    public function messages()
    {
        return [
            'cpf.required' => 'O campo CPF é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'mobile_phone.required' => 'O campo telefone celular é obrigatório.',
            'number_address.required' => 'O campo número é obrigatório.',
            'district_address.required' => 'O campo bairro é obrigatório.',
            'ibge_code.required_without'  => 'Informe um CEP válido ou selecione um estado e uma cidade.',
            'city_select.required_without'  => 'Selecione um estado e uma cidade ou informe um CEP válido.',
        ];
    }

}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LegalProceedingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'lawsuit_id' => 'required',
            'lawsuit_type_id' => 'required',
            'legal_address_1' => 'required',
            'legal_address_2' => 'required',
            'uf_id' => 'required',
            'lawsuit_description' => 'required',
            'defendant_description' => 'required',
            'preliminary_description' => 'required',
            'fact_description' => 'required',
            'right_description' => 'required',
            'order_description' => 'required',
            'value_lawsuit' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'lawsuit_id' => 'Processo é obrigatório.',
            'lawsuit_type_id' => 'Tipo da ação é obrigatório.',
            'legal_address_1.required' => '1º Endereçamento é obrigatório.',
            'legal_address_2.required' => '2º Endereçamento é obrigatório.',
            'uf_id' => 'Estado é obrigatório.',
            'lawsuit_description' => 'Ação é obrigatório.',
            'defendant_description' => 'Réu é obrigatório.',
            'preliminary_description' => 'Preliminar é obrigatório.',
            'fact_description' => 'Do Fato é obrigatório.',
            'right_description' => 'Do Direitro é obrigatório.',
            'order_description' => 'Dos Pedidos é obrigatório.',
            'value_lawsuit' => 'Valor da causa é obrigatório.',
        ];
    }

}

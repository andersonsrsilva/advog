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
            'uf_id' => 'required',
            'legal_address_1' => 'required|min:6',
            'legal_address_2' => 'required|min:6',
            'lawsuit_description' => 'required|min:6',
            'defendant_description' => 'required|min:6',
            'preliminary_description' => 'required|min:6',
            'fact_description' => 'required|min:6',
            'right_description' => 'required|min:6',
            'order_description' => 'required|min:6',
            'value_lawsuit' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'lawsuit_id.required' => 'O Processo é obrigatório.',
            'legal_address_1.required' => 'O 1º Endereçamento é obrigatório.',
            'legal_address_2.required' => 'O 2º Endereçamento é obrigatório.',
        ];
    }

}

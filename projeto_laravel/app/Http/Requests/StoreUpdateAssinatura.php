<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAssinatura extends FormRequest
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
            'qtd_caracteres' => 'required|numeric|min:1|max:200',
            'assinatura_padrao' => 'required|string|min:10|max:200',
            'assinatura_usada_x_vezes' => 'required|numeric|min:1|max:99',
        ];
    }

    public function messages()
    {
        return [
            'qtd_caracteres.required' => 'A quantidade de caracteres é obrigatória.',
            'qtd_caracteres.numeric' => 'A quantidade de caracteres deve ser um número.',
            'qtd_caracteres.min' => 'A quantidade de caracteres deve ser maior que 1.',
            'qtd_caracteres.max' => 'A quantidade de caracteres deve ser menor que 200.',
            'assinatura_padrao.required' => 'A assinatura padrão é obrigatória.',
            'assinatura_padrao.string' => 'A assinatura padrão deve ser uma string.',
            'assinatura_padrao.min' => 'A assinatura padrão deve ter no mínimo 10 caracteres.',
            'assinatura_padrao.max' => 'A assinatura padrão deve ter no máximo 200 caracteres.',
            'assinatura_usada_x_vezes.required' => 'O número de vezes em que a Assinatura foi usada é obrigatória.',
            'assinatura_usada_x_vezes.numeric' => 'O número de vezes em que a Assinatura foi usada deve ser um número.',
            'assinatura_usada_x_vezes.min' => 'O número de vezes em que a Assinatura foi usada deve ser maior que 1.',
            'assinatura_usada_x_vezes.max' => 'O número de vezes em que a Assinatura foi usada deve ser menor que 99.',
        ];
    }
}

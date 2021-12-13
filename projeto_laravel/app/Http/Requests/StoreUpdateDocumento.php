<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateDocumento extends FormRequest
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
            'titulo' => 'required|min:3|max:255',
            'tamanho' => 'required|numeric',
            'num_assinaturas' => 'required|numeric',
            'assinatura_responsavel' => 'required|min:6|max:255',
            'qtd_paginas' => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'titulo.required' => 'O campo título é obrigatório',
            'titulo.min' => 'O campo título deve ter no mínimo 3 caracteres',
            'titulo.max' => 'O campo título deve ter no máximo 255 caracteres',
            'tamanho.required' => 'O campo tamanho é obrigatório',
            'tamanho.numeric' => 'O campo tamanho deve ser numérico',
            'num_assinaturas.required' => 'O campo número de assinaturas é obrigatório',
            'num_assinaturas.numeric' => 'O campo número de assinaturas deve ser numérico',
            'assinatura_responsavel.required' => 'O campo responsável pela assinatura é obrigatório',
            'assinatura_responsavel.min' => 'O campo responsável pela assinatura deve ter no mínimo 6 caracteres',
            'assinatura_responsavel.max' => 'O campo responsável pela assinatura deve ter no máximo 255 caracteres',
            'qtd_paginas.required' => 'O campo quantidade de páginas é obrigatório',
            'qtd_paginas.numeric' => 'O campo quantidade de páginas deve ser numérico'
        ];
    }
}

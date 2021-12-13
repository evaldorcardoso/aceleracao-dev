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
            'titulo' => 'required|min:10|max:200',
            'tamanho' => 'required|numeric|min:1|max:999',
            'num_assinaturas' => 'required|numeric|min:1|max:99',
            'assinatura_responsavel' => 'required|min:10|max:200',
            'qtd_paginas' => 'required|numeric|min:1|max:99'
        ];
    }

    public function messages(){
        return [
            'titulo.required' => 'O campo título é obrigatório',
            'titulo.min' => 'O campo título deve ter no mínimo 10 caracteres',
            'titulo.max' => 'O campo título deve ter no máximo 200 caracteres',
            'tamanho.required' => 'O campo tamanho é obrigatório',
            'tamanho.numeric' => 'O campo tamanho deve ser numérico',
            'tamanho.min' => 'O campo tamanho deve ter no mínimo 1 Mb',
            'tamanho.max' => 'O campo tamanho deve ter no máximo 999 Mb',
            'num_assinaturas.required' => 'O campo número de assinaturas é obrigatório',
            'num_assinaturas.numeric' => 'O campo número de assinaturas deve ser numérico',
            'num_assinaturas.min' => 'O campo número de assinaturas deve ter no mínimo 1',
            'num_assinaturas.max' => 'O campo número de assinaturas deve ter no máximo 99',
            'assinatura_responsavel.required' => 'O campo responsável pela assinatura é obrigatório',
            'assinatura_responsavel.min' => 'O campo responsável pela assinatura deve ter no mínimo 10 caracteres',
            'assinatura_responsavel.max' => 'O campo responsável pela assinatura deve ter no máximo 200 caracteres',
            'qtd_paginas.required' => 'O campo quantidade de páginas é obrigatório',
            'qtd_paginas.numeric' => 'O campo quantidade de páginas deve ser numérico',
            'qtd_paginas.min' => 'O campo quantidade de páginas deve ter no mínimo 1',
            'qtd_paginas.max' => 'O campo quantidade de páginas deve ter no máximo 99'
        ];
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Documento::create([
        //     'titulo' => 'Documento 1',
        //     'tamanho' => '100',
        //     'num_assinaturas' => '1',
        //     'assinatura_responsavel' => '1',
        //     'qtd_paginas' => '100'
        // ]);
        // \App\Models\Documento::create([
        //     'titulo' => 'Documento 2',
        //     'tamanho' => '200',
        //     'num_assinaturas' => '2',
        //     'assinatura_responsavel' => '2',
        //     'qtd_paginas' => '200'
        // ]);
        // \App\Models\Documento::create([
        //     'titulo' => 'Documento 3',
        //     'tamanho' => '300',
        //     'num_assinaturas' => '3',
        //     'assinatura_responsavel' => '3',
        //     'qtd_paginas' => '300'
        // ]);
        \App\Models\Documento::factory(600)->create();
    }
}

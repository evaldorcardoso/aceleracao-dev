<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->float('tamanho');
            $table->integer('num_assinaturas');
            $table->string('assinatura_responsavel');
            $table->integer('qtd_paginas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql')->dropIfExists('documentos');
    }
}

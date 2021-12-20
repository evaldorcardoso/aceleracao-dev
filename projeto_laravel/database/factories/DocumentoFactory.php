<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'tamanho' => $this->faker->randomNumber(2),
            'num_assinaturas' => $this->faker->randomNumber(1),
            'assinatura_responsavel' => $this->faker->name,
            'qtd_paginas' => $this->faker->randomNumber(2)
        ];
    }
}

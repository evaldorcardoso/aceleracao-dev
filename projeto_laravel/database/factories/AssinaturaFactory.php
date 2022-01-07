<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AssinaturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'qtd_caracteres' => $this->faker->randomNumber(2),
            'assinatura_padrao' => $this->faker->name,
            'assinatura_usada_x_vezes' => $this->faker->randomNumber(2)
        ];
    }
}

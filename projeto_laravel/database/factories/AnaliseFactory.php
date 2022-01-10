<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnaliseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_doc' => $this->faker->numberBetween(1, 600),
            'id_assinatura' => $this->faker->numberBetween(1, 200),
            'status' => $this->faker->randomElement(['Aprovado', 'Reprovado', 'Em Análise']),
            'data_analise' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'visualizadores' => $this->faker->numberBetween(1, 100)
        ];
    }
}

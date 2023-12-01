<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coordinadorpppep>
 */
class CoordinadorpppepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'coord_ep'=>$this->faker->word(),
            'coord_codigo'=>$this->faker->numberBetween(900000000,999999999),
            'coord_grado_academico'=>$this->faker->word(),
            'coord_especializacion'=>$this->faker->word(),
            'coord_cargo'=>$this->faker->word(),
            'coord_horario_disponibilidad'=>$this->faker->word(),
            'coord_funciones_especificas_de_rol'=>$this->faker->sentence(),
            'user_id'=>$this->faker->numberBetween(1,1),
        ];
    }
}

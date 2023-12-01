<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'empresa_nombre'=>$this->faker->word(),
            'empresa_tipo_de_industria'=>$this->faker->word(),
            'empresa_descripcion'=>$this->faker->sentence(),
            'empresa_correo_electronico'=>$this->faker->word(),
            'empresa_numero_de_telefono'=>$this->faker->word(),
            'empresa_direccion_de_sedes'=>$this->faker->word(),
            'empresa_requisitos_para_estudiantes_practicantes'=>$this->faker->sentence(),
            'empresa_area_de_pracicas'=>$this->faker->word(),
            'empresa_nombre_representante_encargado_de_PPP'=>$this->faker->word(),
            'empresa_cargo_representante_encargado_de_PPP'=>$this->faker->word(),
            'empresa_telefono_del_representante'=>$this->faker->word(),
        ];
    }
}

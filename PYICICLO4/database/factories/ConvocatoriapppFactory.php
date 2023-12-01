<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Convocatoriappp>
 */
class ConvocatoriapppFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'convocatoria_nombre_empresa'=>$this->faker->word(),
            'convocatoria_descripcion'=>$this->faker->sentence(),
            'convocatoria_fecha_inicio'=>$this->faker->date(),
            'convocatoria_fecha_fin'=>$this->faker->date(),
            'convocatoria_contacto'=>$this->faker->word(),
            'convocatoria_informacion_empresa'=>$this->faker->sentence(),
            'convocatoria_requisitos_elegibilidad'=>$this->faker->sentence(),
            'convocatoria_remuneracion_empresa'=>$this->faker->sentence(1,1),
            'convocatoria_tipo_moneda'=>$this->faker->word(),
            'convocatoria_remuneracion_empresa_monto'=>$this->faker->numberBetween(1000,2000),
            'convocatoria_link_pagina_politicas_confidenciabilidad'=>$this->faker->sentence(),
            'convocatoria_beneficios_empresa'=>$this->faker->sentence(),
            'convocatoria_ubicacion_empresa'=>$this->faker->word(),
            'convocatoria_documentos_requeridos'=>$this->faker->sentence(),
            'convocatoria_imagen_convocatoria'=>$this->faker->sentence(),
            'empresa_id'=>$this->faker->numberBetween(1,20),
        ];
    }
}

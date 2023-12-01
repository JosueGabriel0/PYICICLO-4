<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('convocatoriappps', function (Blueprint $table) {
            $table->id();

            $table->string('convocatoria_nombre_empresa',50);
            $table->string('convocatoria_descripcion',500);
            $table->date('convocatoria_fecha_inicio',50);
            $table->date('convocatoria_fecha_fin',50);
            $table->string('convocatoria_contacto',50);
            $table->string('convocatoria_informacion_empresa',500);
            $table->string('convocatoria_requisitos_elegibilidad',1000);
            $table->string('convocatoria_remuneracion_empresa',1000);
            $table->string('convocatoria_tipo_moneda',1000);
            $table->double('convocatoria_remuneracion_empresa_monto',100);
            $table->string('convocatoria_link_pagina_politicas_confidenciabilidad',1000);
            $table->string('convocatoria_beneficios_empresa',1000);
            $table->string('convocatoria_ubicacion_empresa',1000);
            $table->string('convocatoria_documentos_requeridos',1000);
            $table->string('convocatoria_imagen_convocatoria',1000);
            $table->unsignedBigInteger('empresa_id')->nullable();
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convocatoriappps');
    }
};

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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();

            $table->string('empresa_nombre',50);
            $table->string('empresa_tipo_de_industria',50);
            $table->string('empresa_descripcion',1000);
            $table->string('empresa_correo_electronico',50);
            $table->string('empresa_numero_de_telefono',50);
            $table->string('empresa_direccion_de_sedes',50);
            $table->string('empresa_requisitos_para_estudiantes_practicantes',100);
            $table->string('empresa_area_de_pracicas',50);
            $table->string('empresa_nombre_representante_encargado_de_PPP',50);
            $table->string('empresa_cargo_representante_encargado_de_PPP',50);
            $table->string('empresa_telefono_del_representante',50);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};

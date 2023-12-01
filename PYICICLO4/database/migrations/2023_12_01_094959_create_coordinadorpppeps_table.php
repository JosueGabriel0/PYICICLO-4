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
        Schema::create('coordinadorpppeps', function (Blueprint $table) {
            $table->id();

            $table->string('coord_ep',50);
            $table->string('coord_codigo',50);
            $table->string('coord_grado_academico',50);
            $table->string('coord_especializacion',50);
            $table->string('coord_cargo',50);
            $table->string('coord_horario_disponibilidad',50);
            $table->string('coord_funciones_especificas_de_rol',1000);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordinadorpppeps');


    }
};

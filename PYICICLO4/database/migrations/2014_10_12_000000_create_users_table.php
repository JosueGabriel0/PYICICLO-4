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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();

            //Nuevos atributos
            $table->string('ap_paterno')->nullable();
            $table->string('ap_materno')->nullable();
            $table->date('fecha_de_nacimiento')->nullable();
            $table->string('genero', 1)->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('DNI', 8)->nullable();
            $table->string('pais_de_origen')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('estado_civil', 1)->nullable();
            $table->string('nacionalidad')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

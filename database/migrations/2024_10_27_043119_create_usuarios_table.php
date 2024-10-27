<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('USUARIOS', function (Blueprint $table) {
        $table->id(); 
        $table->string('NOMBRES', 100);
        $table->string('APELLIDOS', 100); // Columna para el apellido
        $table->string('EMAIL', 100)->unique();
        $table->string('TELEFONO', 15)->nullable();
        $table->string('CONTRASENA', 255);
        $table->string('IMAGEN_PERFIL', 255)->nullable();
        $table->boolean('ACTIVO')->default(true);
        $table->date('FECHA_NACIMIENTO')->nullable(); // Columna para fecha de nacimiento
        $table->string('SEXO', 10)->nullable(); // Columna para sexo
        $table->timestamps();
    });
    }

};

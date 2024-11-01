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
    Schema::create('DIRECCIONES_USUARIO', function (Blueprint $table) {
        $table->id('ID');
        $table->foreignId('ID_USUARIO')->constrained('USUARIOS');
<<<<<<< HEAD:database/migrations/2024_10_27_043133_create_direcciones_usuario_table.php
        $table->string('NOMBRE_COMPLETO', 255);
        $table->string('CODIGO_POSTAL', 10);
        $table->string('ESTADO', 100);
        $table->string('MUNICIPIO', 100);
        $table->string('COLONIA', 100);
        $table->string('CALLE', 255);
        $table->string('NUMERO_EXTERIOR', 10);
        $table->string('NUMERO_INTERIOR', 10);
        $table->string('CALLE_1', 100);
        $table->string('CALLE_2', 100);
        $table->string('CONTACTO', 10);
        $table->string('INDICACIONES', 255)->nullable();
=======
        $table->string('DIRECCION', 255);
        $table->string('CIUDAD', 100);
        $table->string('ESTADO', 100);
        $table->string('CODIGO_POSTAL', 10);
>>>>>>> d001afa40ca5c200937307fc1098791f64b1ecdd:database/migrations/2024_10_30_044635_create_direcciones_usuario_table.php
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DIRECCIONES_USUARIO');
    }
};

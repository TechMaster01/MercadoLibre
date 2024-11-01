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
        $table->string('DIRECCION', 255);
        $table->string('CIUDAD', 100);
        $table->string('ESTADO', 100);
        $table->string('CODIGO_POSTAL', 10);
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

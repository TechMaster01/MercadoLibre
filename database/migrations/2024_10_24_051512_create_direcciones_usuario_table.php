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
        $table->id();
        $table->foreignId('ID_USUARIO')->constrained('USUARIOS');
        $table->string('DIRECCION', 255)->nullable();
        $table->string('CIUDAD', 100)->nullable();
        $table->string('ESTADO', 100)->nullable();
        $table->string('CODIGO_POSTAL', 10)->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('DIRECCIONES_USUARIO');
}

};

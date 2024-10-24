<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesUsuarioTable extends Migration
{
    public function up()
    {
        Schema::create('direcciones_usuario', function (Blueprint $table) {
            $table->id('ID_DIRECCION'); 
            $table->foreignId('ID_USUARIO') 
                  ->constrained('usuarios') 
                  ->onDelete('cascade'); 
            $table->string('DIRECCION');
            $table->string('CIUDAD');
            $table->string('ESTADO');
            $table->string('CODIGO_POSTAL');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('direcciones_usuario'); 
    }
}

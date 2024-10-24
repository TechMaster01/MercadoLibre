<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguridadUsuarioTable extends Migration
{
    public function up()
    {
        Schema::create('seguridad_usuario', function (Blueprint $table) {
            $table->id('ID_EVENTO_SEGURIDAD'); 
            $table->foreignId('ID_USUARIO')->constrained('usuarios')->onDelete('cascade'); 
            $table->text('DISPOSITIVOS_LOGUEADOS')->nullable();
            $table->text('PROBLEMA_REPORTADO')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seguridad_usuario');
    }
}

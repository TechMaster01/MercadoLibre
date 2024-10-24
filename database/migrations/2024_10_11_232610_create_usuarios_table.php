<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->ID(); 
            $table->string('NOMBRE_USUARIO');
            $table->string('EMAIL')->unique();
            $table->string('TELEFONO')->nullable();
            $table->string('CONTRASENA');
            $table->string('IMAGEN_PERFIL')->nullable();
            $table->boolean('ACTIVO')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilUsuarioTable extends Migration
{
    public function up()
    {
        Schema::create('perfil_usuario', function (Blueprint $table) {
            $table->id('ID_USUARIO')->references('ID_USUARIO')->on('usuarios')->onDelete('cascade');
            $table->string('NOMBRE_COMPLETO');
            $table->date('FECHA_NACIMIENTO')->nullable();
            $table->enum('SEXO', ['masculino', 'femenino', 'otro'])->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perfil_usuario');
    }
}


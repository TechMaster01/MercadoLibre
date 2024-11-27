<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasClienteTable extends Migration
{
    public function up()
    {
        Schema::create('PREGUNTAS_CLIENTE', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('ID_USUARIO')->constrained('USUARIOS')->onDelete('cascade');
            $table->foreignId('ID_PRODUCTO')->constrained('PRODUCTOS')->onDelete('cascade');
            $table->foreignId('ID_AUTO')->constrained('AUTOS')->onDelete('cascade'); 
            $table->text('PREGUNTA');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('PREGUNTAS_CLIENTE');
    }
}

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
            $table->foreignId('AUTO_ID')->constrained('AUTOS')->onDelete('cascade'); 
            $table->foreignId('USUARIO_ID')->constrained('USUARIOS')->onDelete('cascade'); 
            $table->text('PREGUNTA'); 
            $table->text('RESPUESTA')->nullable(); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('PREGUNTAS_CLIENTE');
    }
}

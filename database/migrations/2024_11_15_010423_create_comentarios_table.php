<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    public function up()
    {
        Schema::create('COMENTARIOS', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('ID_USUARIO')->constrained('USUARIOS')->onDelete('cascade'); 
            $table->foreignId('ID_PRODUCTO')->constrained('PRODUCTOS')->onDelete('cascade'); 
            $table->text('COMENTARIO'); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('COMENTARIOS');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    public function up()
    {
        Schema::create('INMUEBLES', function (Blueprint $table) {
            $table->id();
            $table->string('TIPO_INMUEBLE', 100); 
            $table->string('TITULO', 255);
            $table->date('FECHA_PUBLICACION');
            $table->string('AUTOR_PUBLICACION', 255); 
            $table->decimal('PRECIO', 15, 2);
            $table->integer('METROS_INMUEBLE'); 
            $table->integer('NUMERO_RECAMARAS')->nullable();
            $table->integer('NUMERO_BANOS')->nullable();
            $table->string('UBICACION', 255); 
            $table->text('CARACTERISTICAS_INMUEBLE')->nullable(); 
            $table->text('INFORMACION_ZONA')->nullable(); 
            $table->text('DESCRIPCION')->nullable();
            $table->text('INFORMACION_TIENDA')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('INMUEBLES');
    }
}

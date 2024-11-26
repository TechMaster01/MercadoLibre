<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    public function up()
    {
        Schema::create('AUTOS', function (Blueprint $table) {
            $table->id(); 
            $table->enum('TIPO_VEHICULO', ['Sedán', 'SUV', 'Camioneta', 'Deportivo', 'Hatchback', 'Convertible', 'Otro'])->default('Otro'); 
            $table->string('MARCA', 100); 
            $table->string('MODELO', 100); 
            $table->date('FECHA_PUBLICACION'); 
            $table->decimal('PRECIO', 10, 2);
            $table->boolean('FINANCIADO')->default(false); 
            $table->year('ANIO_VEHICULO'); 
            $table->integer('KILOMETRAJE')->unsigned(); 
            $table->text('CARACTERISTICAS')->nullable(); 
            $table->text('DESCRIPCION')->nullable(); 
            $table->text('INFORMACION_VENDEDOR')->nullable(); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('AUTOS');
    }
}

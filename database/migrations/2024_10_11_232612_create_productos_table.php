<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('ID_PRODUCTO'); 
            $table->string('NOMBRE_PRODUCTO', 255); 
            $table->text('DESCRIPCION_PRODUCTO')->nullable(); 
            $table->decimal('PRECIO', 10, 2); 
            $table->integer('STOCK')->default(0); 
            $table->foreignId('ID_VENDEDOR')->constrained('usuarios')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}

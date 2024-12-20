<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('PRODUCTOS', function (Blueprint $table) {
            $table->id();
            $table->string('MARCA', 100); 
            $table->string('NOMBRE_PRODUCTO', 255);
            $table->text('DESCRIPCION_PRODUCTO')->nullable();
            $table->text('CARACTERISTICAS_PRODUCTO')->nullable();
            $table->decimal('PRECIO', 10, 2);
            $table->integer('CANTIDAD_VENDIDOS')->default(0);
            $table->decimal('PRECIO_CON_DESCUENTO', 10, 2)->nullable();
            $table->decimal('PORCENTAJES_DESCUENTOS', 5, 2)->nullable();
            $table->text('RESEÑAS')->nullable();
            $table->integer('STOCK')->default(0);
            $table->string('IMAGEN')->nullable();
            $table->foreignId('ID_VENDEDOR')->constrained('USUARIOS')->onDelete('cascade');
            $table->foreignId('ID_CATEGORIA')->nullable()->constrained('CATEGORIAS')->onDelete('cascade');
            $table->string('COLORES_DISPONIBLES')->nullable();
            $table->enum('TIPO_ENVIO', ['estándar', 'express', 'internacional'])->default('estándar');
            $table->date('FECHA_ENTREGA')->nullable(); 
            $table->decimal('COSTE_ENTREGA', 10, 2)->nullable(); 
            $table->decimal('CALIFICACION', 3, 1)->nullable()->default(0); 
            $table->decimal('IVA', 5, 2)->nullable(); 
            $table->text('CARACTERISTICAS')->nullable(); 
            $table->boolean('PRODUCTOS_TEMPORADA')->default(false); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('PRODUCTOS');
    }
}

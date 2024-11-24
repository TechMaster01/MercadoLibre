<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    public function up()
    {
        Schema::create('VENTAS', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('ID_PRODUCTO')->constrained('PRODUCTOS'); 
            $table->foreignId('ID_CLIENTE')->constrained('USUARIOS'); 
            $table->integer('CANTIDAD')->default(1); 
            $table->decimal('PRECIO_TOTAL', 10, 2); 
            $table->enum('ESTADO', ['pendiente', 'pagado', 'enviado', 'entregado', 'cancelado'])->default('pendiente'); 
            $table->timestamp('FECHA_VENTA')->useCurrent(); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('VENTAS');
    }
}

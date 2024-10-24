<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('ID_PEDIDO');
            $table->foreignId('ID_USUARIO')->constrained('usuarios')->onDelete('cascade');
            $table->timestamp('FECHA_PEDIDO')->useCurrent();
            $table->decimal('MONTO_TOTAL', 10, 2);
            $table->string('ESTADO_ENVIO', 100)->nullable();
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}

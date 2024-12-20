<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('PEDIDOS', function (Blueprint $table) {
        $table->id();
        $table->foreignId('ID_USUARIO')->constrained('USUARIOS');
        $table->timestamp('FECHA_PEDIDO')->useCurrent();
        $table->decimal('MONTO_TOTAL', 10, 2);
        $table->string('ESTADO_ENVIO', 100)->nullable();
        $table->foreignId('ID_CARRITO')->constrained('CARRITO_COMPRAS');
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PEDIDOS');
    }
};

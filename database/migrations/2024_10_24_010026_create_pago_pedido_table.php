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
    Schema::create('PAGO_PEDIDO', function (Blueprint $table) {
        $table->id();
        $table->foreignId('ID_PEDIDO')->constrained('PEDIDOS');
        $table->string('METODO_PAGO', 50)->nullable();
        $table->decimal('MONTO_PAGADO', 10, 2);
    });
}

public function down()
{
    Schema::dropIfExists('PAGO_PEDIDO');
}

};

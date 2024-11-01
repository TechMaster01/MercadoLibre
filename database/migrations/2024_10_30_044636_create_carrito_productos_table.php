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
        Schema::create('CARRITO_PRODUCTOS', function (Blueprint $table) {
            $table->foreignId('ID')->constrained('CARRITO_COMPRAS');
            $table->foreignId('ID_PRODUCTO')->constrained('PRODUCTOS');
            $table->integer('CANTIDAD');
            $table->primary(['ID', 'ID_PRODUCTO']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CARRITO_PRODUCTOS');
    }
};

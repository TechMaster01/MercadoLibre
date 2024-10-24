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
    Schema::create('PRODUCTOS', function (Blueprint $table) {
        $table->id();
        $table->string('NOMBRE_PRODUCTO', 255);
        $table->text('DESCRIPCION_PRODUCTO')->nullable();
        $table->decimal('PRECIO', 10, 2)->nullable();
        $table->integer('STOCK')->default(0);
        $table->foreignId('ID_VENDEDOR')->constrained('USUARIOS');
    });
}

public function down()
{
    Schema::dropIfExists('PRODUCTOS');
}

};

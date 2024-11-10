<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('PRODUCTO_IMAGEN', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ID_PRODUCTO')->constrained('PRODUCTOS');
            $table->string('NOMBRE_IMAGEN');
            $table->string('URL_IMAGEN'); 
            $table->boolean('PRINCIPAL')->default(false); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('PRODUCTO_IMAGEN');
    }
};

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
    Schema::create('FAVORITOS', function (Blueprint $table) {
        $table->id();
        $table->foreignId('ID_USUARIO')->constrained('USUARIOS');
        $table->foreignId('ID_PRODUCTO')->constrained('PRODUCTOS');
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('FAVORITOS');
    }
};

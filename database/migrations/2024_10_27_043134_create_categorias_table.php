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
    Schema::create('CATEGORIAS', function (Blueprint $table) {
        $table->id();
        $table->string('NOMBRE_CATEGORIA', 100);
    });
}

public function down()
{
    Schema::dropIfExists('CATEGORIAS');
}

};

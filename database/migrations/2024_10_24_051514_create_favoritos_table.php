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
        $table->foreignId('ID_PRODUCTO')->constrained('PRODUCTOS');
    });
}

public function down()
{
    Schema::dropIfExists('FAVORITOS');
}

};

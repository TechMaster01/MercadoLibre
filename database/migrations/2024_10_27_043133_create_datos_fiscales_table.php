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
    Schema::create('DATOS_FISCALES', function (Blueprint $table) {
        $table->foreignId('ID_USUARIO')->primary()->constrained('USUARIOS');
        $table->string('RFC', 13)->nullable();
        $table->string('DIRECCION_FISCAL', 255)->nullable();
        $table->text('BENEFICIARIOS')->nullable();
    });
    }

public function down()
{
    Schema::dropIfExists('DATOS_FISCALES');
}

};
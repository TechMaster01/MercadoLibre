<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosFiscalesTable extends Migration
{
    public function up()
    {
        Schema::create('datos_fiscales', function (Blueprint $table) {
            $table->id('ID_USUARIO')->references('ID_USUARIO')->on('usuarios')->onDelete('cascade');
            $table->string('RFC')->nullable();
            $table->string('DIRECCION_FISCAL')->nullable();
            $table->text('BENEFICCIARIOS')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('datos_fiscales');
    }
}

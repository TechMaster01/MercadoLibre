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
    Schema::create('USUARIOS', function (Blueprint $table) {
        $table->id(); 
        $table->string('NOMBRE_USUARIO', 100);
        $table->string('EMAIL', 100)->unique();
        $table->string('TELEFONO', 15)->nullable();
        $table->string('CONTRASENA', 255);
        $table->string('IMAGEN_PERFIL', 255)->nullable();
        $table->boolean('ACTIVO')->default(true);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('USUARIOS');
}

};

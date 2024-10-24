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
    Schema::create('PERFIL_USUARIO', function (Blueprint $table) {
        $table->foreignId('ID_USUARIO')->primary()->constrained('USUARIOS');
        $table->string('NOMBRE_COMPLETO', 150)->nullable();
        $table->date('FECHA_NACIMIENTO')->nullable();
        $table->string('SEXO', 10)->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('PERFIL_USUARIO');
}

};

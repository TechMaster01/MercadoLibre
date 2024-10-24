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
    Schema::create('LOGIN_HISTORIAL', function (Blueprint $table) {
        $table->id('ID_LOGIN');
        $table->foreignId('ID_USUARIO')->constrained('USUARIOS');
        $table->timestamp('FECHA_HORA')->default(DB::raw('CURRENT_TIMESTAMP'));
        $table->string('METODO_AUTENTICACION', 50)->nullable();
        $table->string('DIRECCION_IP', 45)->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('LOGIN_HISTORIAL');
}

};

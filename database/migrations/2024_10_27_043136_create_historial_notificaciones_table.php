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
    Schema::create('HISTORIAL_NOTIFICACIONES', function (Blueprint $table) {
        $table->id();
        $table->foreignId('ID_USUARIO')->constrained('USUARIOS');
        $table->string('TIPO_NOTIFICACION', 50)->nullable();
        $table->timestamp('FECHA_ENVIO')->default(DB::raw('CURRENT_TIMESTAMP'));
    });
}

public function down()
{
    Schema::dropIfExists('HISTORIAL_NOTIFICACIONES');
}

};
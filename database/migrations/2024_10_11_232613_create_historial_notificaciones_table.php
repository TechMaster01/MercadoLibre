<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialNotificacionesTable extends Migration
{
    public function up()
    {
        Schema::create('historial_notificaciones', function (Blueprint $table) {
            $table->id('ID_NOTIFICACION');
            $table->foreignId('ID_USUARIO')->constrained('usuarios')->onDelete('cascade');
            $table->string('TIPO_NOTIFICACION', 50)->nullable();
            $table->timestamp('FECHA_ENVIO')->useCurrent();
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('historial_notificaciones');
    }
}

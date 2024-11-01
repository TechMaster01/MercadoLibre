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
    Schema::create('METODOS_PAGO', function (Blueprint $table) {
        $table->id('ID');
        $table->foreignId('ID_USUARIO')->constrained('USUARIOS');
        $table->string('TIPO_METODO', 50);
        $table->string('NOMBRE_TITULAR', 100);
        $table->string('NUMERO_TARJETA', 20)->nullable();
        $table->date('FECHA_EXPIRACION')->nullable();
        $table->string('CVV', 4)->nullable();
        $table->string('BANCO_EMISOR', 100)->nullable();
        $table->string('CORREO_PAYPAL', 100)->nullable();
        $table->string('MONEDA', 10)->default('MXN');
        $table->boolean('ACTIVO')->default(true);
        $table->timestamp('FECHA_CREACION')->default(DB::raw('CURRENT_TIMESTAMP'));
        $table->timestamp('FECHA_ACTUALIZACION')->nullable();
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('METODOS_PAGO');
    }
};

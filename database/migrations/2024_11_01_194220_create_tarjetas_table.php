<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('TARJETAS', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ID_BILLETERA')->constrained('BILLETERA_DIGITAL')->onDelete('cascade');
            $table->string('NUMERO_TARJETA')->unique();
            $table->text('NOMBRE_TITULAR');
            $table->string('FECHA_EXPIRACION');
            $table->string('CVV');
            $table->string('APODO')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TARJETAS');
    }
};

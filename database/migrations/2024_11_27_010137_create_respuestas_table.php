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
        Schema::create('RESPUESTAS', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ID_PREGUNTA')->constrained('PREGUNTAS_CLIENTE')->onDelete('cascade');
            $table->foreignId('ID_USUARIO')->constrained('USUARIOS')->onDelete('cascade');
            $table->text('RESPUESTA');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuestas');
    }
};

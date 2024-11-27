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
    Schema::create('BILLETERA_DIGITAL', function (Blueprint $table) {
        $table->id();
        $table->foreignId('ID_USUARIO')->constrained('USUARIOS')->onDelete('cascade');
        $table->decimal('SALDO', 10, 2)->default(0.00);
        $table->string('TIPO_MONEDA', 10)->default('MXN');
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BILLETERA_DIGITAL');
    }
};

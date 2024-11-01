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
        $table->id('ID');
        $table->foreignId('ID_USUARIO')->constrained('USUARIOS');
        $table->decimal('SALDO', 10, 2)->default(0.00);
        $table->string('TIPO_MONEDA', 10)->default('MXN');
<<<<<<< HEAD:database/migrations/2024_10_27_043137_create_billetera_digital_table.php
=======
        $table->string('METODO_PAGO', 50);
>>>>>>> d001afa40ca5c200937307fc1098791f64b1ecdd:database/migrations/2024_10_30_044637_create_billetera_digital_table.php
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

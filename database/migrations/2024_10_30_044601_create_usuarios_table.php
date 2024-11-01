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
<<<<<<< HEAD:database/migrations/2024_10_30_044601_create_usuarios_table.php
    Schema::create('USUARIOS', function (Blueprint $table) {
        $table->id();
        $table->string('NOMBRE_USUARIO', 100);
        $table->string('EMAIL', 100)->unique();
        $table->string('TELEFONO', 15)->nullable();
        $table->string('CONTRASEÑA', 255);
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('USUARIOS');
    }
=======
        Schema::create('USUARIOS', function (Blueprint $table) {
            $table->id(); 
            $table->string('NOMBRES', 100);
            $table->string('APELLIDOS', 100); 
            $table->string('EMAIL', 100)->unique();
            $table->string('TELEFONO', 15)->nullable();
            $table->string('CONTRASENA', 255);
            $table->timestamps();
        });
    }
>>>>>>> a6d1cc957025d67813a1317e96abe655cced6ca7:database/migrations/2024_10_27_043119_create_usuarios_table.php
};

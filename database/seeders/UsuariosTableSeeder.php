<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('USUARIOS')->insert([
            [
                'NOMBRE_USUARIO' => 'usuario1',
                'EMAIL' => 'usuario1@example.com',
                'TELEFONO' => '5551234567',
                'CONTRASENA' => bcrypt('password1'),
                'IMAGEN_PERFIL' => null,
                'ACTIVO' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'NOMBRE_USUARIO' => 'usuario2',
                'EMAIL' => 'usuario2@example.com',
                'TELEFONO' => '5557654321',
                'CONTRASENA' => bcrypt('password2'),
                'IMAGEN_PERFIL' => null,
                'ACTIVO' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

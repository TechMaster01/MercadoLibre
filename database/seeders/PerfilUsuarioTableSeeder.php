<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsuariosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('USUARIOS')->insert([
            [
                'NOMBRE_USUARIO' => 'usuario1',
                'APELLIDO' => 'apellido1',
                'EMAIL' => 'usuario1@example.com',
                'TELEFONO' => '5551234567',
                'CONTRASENA' => Hash::make('password1'),
                'IMAGEN_PERFIL' => null,
                'ACTIVO' => true,
                'FECHA_NACIMIENTO' => Carbon::create('1990', '01', '01'),
                'SEXO' => 'Masculino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'NOMBRE_USUARIO' => 'usuario2',
                'APELLIDO' => 'apellido2',
                'EMAIL' => 'usuario2@example.com',
                'TELEFONO' => '5557654321',
                'CONTRASENA' => Hash::make('password2'),
                'IMAGEN_PERFIL' => null,
                'ACTIVO' => true,
                'FECHA_NACIMIENTO' => Carbon::create('1992', '05', '10'),
                'SEXO' => 'Femenino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

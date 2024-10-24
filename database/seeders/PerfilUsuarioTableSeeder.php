<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilUsuarioTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('PERFIL_USUARIO')->insert([
            [
                'ID_USUARIO' => 1, // Asegúrate de que este ID exista en la tabla USUARIOS
                'NOMBRE_COMPLETO' => 'Usuario Uno',
                'FECHA_NACIMIENTO' => '1990-01-01',
                'SEXO' => 'Masculino',
            ],
            [
                'ID_USUARIO' => 2,
                'NOMBRE_COMPLETO' => 'Usuario Dos',
                'FECHA_NACIMIENTO' => '1995-02-02',
                'SEXO' => 'Femenino',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeguridadUsuarioTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('SEGURIDAD_USUARIO')->insert([
            [
                'ID_USUARIO' => 1,
                'DISPOSITIVOS_LOGUEADOS' => 'Dispositivo A',
                'PROBLEMA_REPORTADO' => null,
            ],
            [
                'ID_USUARIO' => 2,
                'DISPOSITIVOS_LOGUEADOS' => 'Dispositivo B',
                'PROBLEMA_REPORTADO' => 'Problema de acceso',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoginHistorialTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('LOGIN_HISTORIAL')->insert([
            [
                'ID_USUARIO' => 1,
                'FECHA_HORA' => now(),
                'METODO_AUTENTICACION' => 'Email',
                'DIRECCION_IP' => '192.168.0.1',
            ],
            [
                'ID_USUARIO' => 2,
                'FECHA_HORA' => now(),
                'METODO_AUTENTICACION' => 'Email',
                'DIRECCION_IP' => '192.168.0.2',
            ],
        ]);
    }
}

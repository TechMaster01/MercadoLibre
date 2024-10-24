<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistorialNotificacionesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('HISTORIAL_NOTIFICACIONES')->insert([
            [
                'ID_USUARIO' => 1,
                'TIPO_NOTIFICACION' => 'Bienvenida',
                'FECHA_ENVIO' => now(),
            ],
            [
                'ID_USUARIO' => 2,
                'TIPO_NOTIFICACION' => 'Promoción',
                'FECHA_ENVIO' => now(),
            ],
        ]);
    }
}

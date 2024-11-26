<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PreguntasClienteSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('PREGUNTAS_CLIENTE')->insert([
                'AUTO_ID' => rand(1, 10), 
                'USUARIO_ID' => rand(1, 5), 
                'PREGUNTA' => '¿Esta unidad sigue disponible? #' . $i,
                'RESPUESTA' => rand(0, 1) ? 'Sí, sigue disponible.' : null, 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

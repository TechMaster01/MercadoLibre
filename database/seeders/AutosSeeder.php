<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AutosSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('AUTOS')->insert([
                'TIPO_VEHICULO' => collect(['Sedán', 'SUV', 'Camioneta', 'Deportivo', 'Hatchback', 'Convertible', 'Otro'])->random(),
                'MARCA' => 'Marca' . $i,
                'MODELO' => 'Modelo' . $i,
                'FECHA_PUBLICACION' => now()->subDays(rand(1, 365)), 
                'PRECIO' => rand(5000, 50000), 
                'FINANCIADO' => (bool)rand(0, 1), 
                'ANIO_VEHICULO' => rand(2000, 2024), 
                'KILOMETRAJE' => rand(0, 200000), 
                'CARACTERISTICAS' => 'Características del auto ' . $i,
                'DESCRIPCION' => 'Descripción del auto ' . $i,
                'INFORMACION_VENDEDOR' => 'Información del vendedor ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DireccionesUsuarioTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('DIRECCIONES_USUARIO')->insert([
            [
                'ID_USUARIO' => 1,
                'DIRECCION' => 'Calle 123',
                'CIUDAD' => 'Ciudad A',
                'ESTADO' => 'Estado A',
                'CODIGO_POSTAL' => '12345',
            ],
            [
                'ID_USUARIO' => 2,
                'DIRECCION' => 'Calle 456',
                'CIUDAD' => 'Ciudad B',
                'ESTADO' => 'Estado B',
                'CODIGO_POSTAL' => '67890',
            ],
        ]);
    }
}

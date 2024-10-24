<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatosFiscalesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('DATOS_FISCALES')->insert([
            [
                'ID_USUARIO' => 1,
                'RFC' => 'RFC123456789',
                'DIRECCION_FISCAL' => 'Dirección 123',
                'BENEFICIARIOS' => 'Beneficiario Uno',
            ],
            [
                'ID_USUARIO' => 2,
                'RFC' => 'RFC987654321',
                'DIRECCION_FISCAL' => 'Dirección 456',
                'BENEFICIARIOS' => 'Beneficiario Dos',
            ],
        ]);
    }
}

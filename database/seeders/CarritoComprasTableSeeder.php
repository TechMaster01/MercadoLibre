<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarritoComprasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('CARRITO_COMPRAS')->insert([
            [
                'ID_USUARIO' => 1,
            ],
            [
                'ID_USUARIO' => 2,
            ],
        ]);
    }
}

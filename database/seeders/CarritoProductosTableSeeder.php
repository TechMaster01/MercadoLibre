<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarritoProductosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('CARRITO_PRODUCTOS')->insert([
            [
                'ID' => 1, // Asegúrate de que este ID exista en la tabla CARRITO_COMPRAS
                'ID_PRODUCTO' => 1, // Asegúrate de que este ID exista en la tabla PRODUCTOS
                'CANTIDAD' => 2,
            ],
            [
                'ID' => 1,
                'ID_PRODUCTO' => 2,
                'CANTIDAD' => 1,
            ],
        ]);
    }
}

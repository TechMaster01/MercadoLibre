<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('PRODUCTOS')->insert([
            [
                'NOMBRE_PRODUCTO' => 'Producto 1',
                'DESCRIPCION_PRODUCTO' => 'Descripción del producto 1',
                'PRECIO' => 100.00,
                'STOCK' => 10,
                'ID_VENDEDOR' => 1,
            ],
            [
                'NOMBRE_PRODUCTO' => 'Producto 2',
                'DESCRIPCION_PRODUCTO' => 'Descripción del producto 2',
                'PRECIO' => 200.00,
                'STOCK' => 5,
                'ID_VENDEDOR' => 2,
            ],
        ]);
    }
}

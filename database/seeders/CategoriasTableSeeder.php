<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('CATEGORIAS')->insert([
            [
                'NOMBRE_CATEGORIA' => 'Categoria 1',
            ],
            [
                'NOMBRE_CATEGORIA' => 'Categoria 2',
            ],
        ]);
    }
}

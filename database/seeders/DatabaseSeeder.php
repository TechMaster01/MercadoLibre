<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
    $this->call(UsuariosTableSeeder::class);
    $this->call(CategoriasTableSeeder::class);
    $this->call(ProductosTableSeeder::class);
    $this->call(DireccionesUsuarioTableSeeder::class);
    $this->call(BilleteraDigitalTableSeeder::class);
    }

}

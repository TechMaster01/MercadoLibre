<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('CATEGORIAS')->insert([
            ['NOMBRE_CATEGORIA' => 'Belleza y Cuidado Personal'],
            ['NOMBRE_CATEGORIA' => 'Accesorios para autos'],
            ['NOMBRE_CATEGORIA' => 'Animales y Mascotas'],
            ['NOMBRE_CATEGORIA' => 'Agro'],
            ['NOMBRE_CATEGORIA' => 'Alimentos y Bebidas'],
            ['NOMBRE_CATEGORIA' => 'Antigüedades y coleccionables'],
            ['NOMBRE_CATEGORIA' => 'Arte, Papelería y Mercería'],
            ['NOMBRE_CATEGORIA' => 'Celulares y Telefonía'],
            ['NOMBRE_CATEGORIA' => 'Computación'],
            ['NOMBRE_CATEGORIA' => 'Consolas y Videojuegos'],
            ['NOMBRE_CATEGORIA' => 'Construcción'],
            ['NOMBRE_CATEGORIA' => 'Cámaras y Accesorios'],
            ['NOMBRE_CATEGORIA' => 'Deportes y Fitness'],
            ['NOMBRE_CATEGORIA' => 'Electrodomésticos'],
            ['NOMBRE_CATEGORIA' => 'Electrónica, Audio y Video'],
            ['NOMBRE_CATEGORIA' => 'Herramientas'],
            ['NOMBRE_CATEGORIA' => 'Hogar, Muebles y Jardín'],
            ['NOMBRE_CATEGORIA' => 'Industria y Oficinas'],
            ['NOMBRE_CATEGORIA' => 'Inmuebles'],
            ['NOMBRE_CATEGORIA' => 'Instrumentos Musicales'],
            ['NOMBRE_CATEGORIA' => 'Joyas y Relojes'],
            ['NOMBRE_CATEGORIA' => 'Juegos y Juguetes'],
            ['NOMBRE_CATEGORIA' => 'Libros Revistas y Comics'],
            ['NOMBRE_CATEGORIA' => 'Música, Películas y Series'],
            ['NOMBRE_CATEGORIA' => 'Recuerdos, Cotillón y Fiestas'],
            ['NOMBRE_CATEGORIA' => 'Ropa, Bolsas y Calzado'],
            ['NOMBRE_CATEGORIA' => 'Salud y Equipamiento Médico'],
            ['NOMBRE_CATEGORIA' => 'Servicios'],
        ]);
    }
}

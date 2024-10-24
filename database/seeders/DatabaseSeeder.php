<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsuariosTableSeeder::class,
            PerfilUsuarioTableSeeder::class,
            DatosFiscalesTableSeeder::class,
            LoginHistorialTableSeeder::class,
            SeguridadUsuarioTableSeeder::class,
            DireccionesUsuarioTableSeeder::class,
            CategoriasTableSeeder::class,
            ProductosTableSeeder::class,
            CarritoComprasTableSeeder::class,
            CarritoProductosTableSeeder::class,
            PedidosTableSeeder::class,
            PagoPedidoTableSeeder::class,
            HistorialNotificacionesTableSeeder::class,
        ]);
    }
}

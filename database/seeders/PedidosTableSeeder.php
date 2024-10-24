<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('PEDIDOS')->insert([
            [
                'ID_USUARIO' => 1,
                'FECHA_PEDIDO' => now(),
                'MONTO_TOTAL' => 300.00,
                'ESTADO_ENVIO' => 'Enviado',
            ],
            [
                'ID_USUARIO' => 2,
                'FECHA_PEDIDO' => now(),
                'MONTO_TOTAL' => 200.00,
                'ESTADO_ENVIO' => 'Pendiente',
            ],
        ]);
    }
}

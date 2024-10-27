<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagoPedidoTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('PAGO_PEDIDO')->insert([
            [
                'ID_PEDIDO' => 1, 
                'METODO_PAGO' => 'Tarjeta de Crédito',
                'MONTO_PAGADO' => 300.00,
            ],
            [
                'ID_PEDIDO' => 2,
                'METODO_PAGO' => 'PayPal',
                'MONTO_PAGADO' => 200.00,
            ],
        ]);
    }
}

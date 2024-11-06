<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BilleteraDigitalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 50; $i++) {  
            DB::table('BILLETERA_DIGITAL')->insert([
                'ID_USUARIO' => $i,  
                'SALDO' => $faker->randomFloat(2, 0, 5000), 
                'TIPO_MONEDA' => 'MXN',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

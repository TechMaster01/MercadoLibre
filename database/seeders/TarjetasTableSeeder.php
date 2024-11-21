<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class TarjetasTableSeeder extends Seeder
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
            DB::table('TARJETAS')->insert([
                'ID_BILLETERA' => $faker->numberBetween(1, 50), 
                'NUMERO_TARJETA' => $faker->creditCardNumber,
                'NOMBRE_TITULAR' => $faker->name,
                'FECHA_EXPIRACION' => Carbon::now()->addYears(3)->format('m/y'), 
                'CVV' => $faker->numberBetween(100, 999),
                'APODO' => $faker->optional()->word,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

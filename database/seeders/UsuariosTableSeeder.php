<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES'); 

        for ($i = 0; $i < 50; $i++) {
            DB::table('USUARIOS')->insert([
                'NOMBRE_USUARIO' => $faker->firstName(),
                'APELLIDOS' => $faker->lastName, 
                'EMAIL' => $faker->unique()->safeEmail,
                'TELEFONO' => $faker->optional()->phoneNumber,
                'CONTRASENA' => hash('sha256', 'MLcontrasena'), 
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }        
    }
}

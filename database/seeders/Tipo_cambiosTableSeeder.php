<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipo_cambio;

class Tipo_cambiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo_cambio::truncate();

         $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Tipo_cambio::create([
                'tc_venta' => $faker->numerify('#.###'),
                'tc_compra' => $faker->numerify('#.###'),
            ]);
        }
    }
}

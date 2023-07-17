<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tecnology;
use Faker\Generator as Faker;
class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0;  $i<5; $i++) { 
            $tecnology = new Tecnology();
            $tecnology -> name = $faker -> word();
            $tecnology -> save();
        }
    }
}

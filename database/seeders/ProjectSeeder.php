<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use App\Models\Type;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
        public function run(Faker $faker)
    {   
        $types = Type::all(["id"]);

        for ($i=0;  $i<10; $i++) { 
            $project = new Project();
            $project -> title = $faker -> sentence(3);
            $project -> content = $faker -> sentence(10);
            $project->image = "placeholders/placeholder.png";
            $project -> deadline = $faker -> date($format = "Y-m-d", $max="now");
            $project -> type_id = $types->random()->id;
            $project -> save();
        }
    }
}


<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100 ; $i++) {

            # Prendo randomicamente un post
            $project = Project::inRandomOrder()->first();

            # Prendo randomicamente l'id di una tech.
            $technology_id = Technology::inRandomOrder()->first()->id;

            # Prendo il post e gli faccio l'attach dell'id della tecnologia
            $project->technologies()->attach($technology_id);

        }
    }
}

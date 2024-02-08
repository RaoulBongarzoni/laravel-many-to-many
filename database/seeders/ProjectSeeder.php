<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [

                'name' => 'social',
                'description' => 'descrizione test',

            ],
            [
                'name' => 'politics',
                'description' => 'descrizione test',
                'type_id' => 2
            ],
            [
                'name' => 'altro tema',
                'description' => 'descrizione test',

            ],
        ];


        foreach ($projects as $project) {

            $newProject = new Project();
            $newProject->fill($project);
            $newProject->save();
        }
    }
}

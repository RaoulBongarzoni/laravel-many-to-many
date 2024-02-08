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
                'type_id' => 1,
                'name' => 'social',
                'description' => 'descrizione test'
            ],
            [
                'name' => 'politics',
                'description' => 'descrizione test'
            ],
            [
                'name' => 'altro tema',
                'description' => 'descrizione test'
            ],
        ];


        foreach ($projects as $project) {

            $newProject = new Project();
            $newProject->fill($project);
            $newProject->save();
        }
    }
}

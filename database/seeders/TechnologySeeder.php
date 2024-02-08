<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [

                'name' => 'tech 1',
                'description' => 'descrizione test',

            ],
            [
                'name' => 'tech 2',
                'description' => 'descrizione test',

            ],
            [
                'name' => 'tech 3',
                'description' => 'descrizione test',

            ],
        ];


        foreach ($technologies as $technology) {

            $newProject = new Technology();
            $newProject->fill($technology);
            $newProject->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Type;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $types = [
            [
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


        foreach ($types as $type) {

            $newType = new Type();
            $newType->fill($type);
            $newType->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\EnumTypeOfSpace;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnumTypeOfSpaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeOfSpace = ['Nebytový priestor', 'Byt v bytovom dome', 'Iná budova', 'Rodinný dom', 'Samostatne stojaca garáž'];

        foreach ( $typeOfSpace as $space ) {
            EnumTypeOfSpace::updateOrCreate([
                'name' => $space,
            ]);
        }
    }
}

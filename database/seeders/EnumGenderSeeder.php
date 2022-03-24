<?php

namespace Database\Seeders;

use App\Models\EnumGender;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnumGenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = ['Muž', 'Žena'];

        foreach ( $genders as $gender ) {
            EnumGender::updateOrCreate([
                'name' => $gender,
            ]);
        }
    }
}

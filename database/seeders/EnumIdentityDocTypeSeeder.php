<?php

namespace Database\Seeders;

use App\Models\EnumIdentityDocType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnumIdentityDocTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $identityDocTypes = ['Občiansky preukaz', 'Pás', 'Iný doklad'];

        foreach ( $identityDocTypes as $type ) {
            EnumIdentityDocType::updateOrCreate([
                'name' => $type,
            ]);
        }
    }
}

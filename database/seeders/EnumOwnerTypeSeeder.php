<?php

namespace Database\Seeders;

use App\Models\EnumOwnerType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnumOwnerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ownerTypes = ['Fyzická osoba', 'Právnická osoba'];

        foreach ( $ownerTypes as $type ) {
            EnumOwnerType::updateOrCreate([
                'name' => $type,
            ]);
        }
    }
}

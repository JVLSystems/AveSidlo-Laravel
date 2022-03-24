<?php

namespace Database\Seeders;

use App\Models\EnumVat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnumVatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vatStates = [
            'Slovenská DPH' => 20,
        ];

        foreach ( $vatStates as $state => $vat ) {
            EnumVat::updateOrCreate([
                'name' => $state,
                'percentage' => $vat,
            ]);
        }
    }
}

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
        $vat_states = [
            'Slovenská DPH' => 20,
        ];

        foreach ( $vat_states as $state => $vat ) {
            EnumVat::updateOrCreate([
                'name' => $state,
                'percentage' => $vat,
            ]);
        }
    }
}

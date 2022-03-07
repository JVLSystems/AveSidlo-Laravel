<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::updateOrCreate([
            'vat_id' => 1,
            'name' => 'Založenie spoločnosti SRO',
            'price_without_vat' => 166.67,
            'price_with_vat' => 200.004,
        ]);

        Service::updateOrCreate([
            'vat_id' => 1,
            'name' => 'Virtuálne sídlo',
            'price_without_vat' => 4.99,
            'price_with_vat' => 5.988,
        ]);

        Service::updateOrCreate([
            'vat_id' => 1,
            'name' => 'Likvidácia spoločnosti',
            'price_without_vat' => 40,
            'price_with_vat' => 48,
        ]);
    }
}

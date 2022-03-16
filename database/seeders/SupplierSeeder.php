<?php

namespace Database\Seeders;

use App\Models\EnumZip;
use App\Models\EnumCity;
use App\Models\Supplier;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = EnumCity::firstOrCreate(['name' => 'Poprad']);
        $zip = EnumZip::firstOrCreate(['name' => '05951']);

        Supplier::updateOrCreate([
            'city_id' => $city->id,
            'zip_id' => $zip->id,
            'state_id' => 1,
            'name' => 'LUNYS, s.r.o.',
            'ico' => '36472549',
            'dic' => 2020019518,
            'icdph' => 'SK2020019518',
            'street' => 'Hlavná 4512/96',
            'active' => 1,
        ]);
    }
}

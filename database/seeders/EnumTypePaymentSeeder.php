<?php

namespace Database\Seeders;

use App\Models\EnumTypePayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnumTypePaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EnumTypePayment::updateOrCreate([
            'name' => 'Bankový prevod',
        ]);
    }
}

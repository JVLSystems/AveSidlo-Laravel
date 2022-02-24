<?php

namespace Database\Seeders;

use App\Models\EnumMj;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnumMjSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EnumMj::create([
            'name' => 'mesiac',
            'code' => 'MONTH',
        ]);
    }
}

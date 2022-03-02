<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate([
            'id' => 1,
            'type' => 'Užívateľ'
        ]);

        Role::updateOrCreate([
            'id' => 2,
            'type' => 'Administrátor'
        ]);

        Role::updateOrCreate([
            'id' => 3,
            'type' => 'Hlavný administrátor'
        ]);
    }
}

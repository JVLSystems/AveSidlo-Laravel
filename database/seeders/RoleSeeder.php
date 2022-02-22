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
        Role::create([
            'id' => 1,
            'type' => 'Užívateľ'
        ]);

        Role::create([
            'id' => 2,
            'type' => 'Administrátor'
        ]);

        Role::create([
            'id' => 3,
            'type' => 'Hlavný administrátor'
        ]);
    }
}

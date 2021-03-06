<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([RoleSeeder::class]);
        $this->call([UserSeeder::class]);
        $this->call([EnumStateSeeder::class]);
        $this->call([EnumTypePaymentSeeder::class]);
        $this->call([EnumVatSeeder::class]);
        $this->call([EnumMjSeeder::class]);
        $this->call([ServiceSeeder::class]);
        $this->call([SupplierSeeder::class]);
        $this->call([EnumTypeOfSpaceSeeder::class]);
        $this->call([EnumGenderSeeder::class]);
        $this->call([EnumOwnerTypeSeeder::class]);
        $this->call([EnumIdentityDocTypeSeeder::class]);
        // $this->call([CompanySeeder::class]);

    }
}

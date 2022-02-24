<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(0, 1),
            'city_id' => mt_rand(0, 1),
            'zip_id' => mt_rand(0, 1),
            'state_id' => mt_rand(0, 1),
            'name' => $this->faker->name(),
            'ico' => $this->faker->numerify('########'),
            'dic' => $this->faker->numerify('##########'),
            'icdph' => sprintf("SK%s", $this->faker->numerify('##########')),
            'street' => $this->faker->streetAddress(),
            'payment_at' => now(),
            'is_paid' => mt_rand(0, 1),
            'is_main' => mt_rand(0, 1),
            'status' => mt_rand(0, 1),
        ];
    }
}

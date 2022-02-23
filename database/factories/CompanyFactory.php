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
            'user_id' => rand(0, 100),
            'city_id' => rand(0, 100),
            'zip_id' => rand(0, 100),
            'state_id' => rand(0, 100),
            'name' => $this->faker->name(),
            'ico' => $this->faker->numerify('########'),
            'dic' => $this->faker->numerify('##########'),
            'icdph' => 'SK' . $this->faker->numerify('##########'),
            'street' => $this->faker->streetAddress(),
            'payment_at' => now(),
            'is_paid' => rand(0, 1),
            'is_main' => rand(0, 1),
            'status' => rand(0, 1),
        ];
    }
}

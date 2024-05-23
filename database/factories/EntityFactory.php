<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entity>
 */
class EntityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company,
            'contact_person' => fake()->name,
            'address' => fake()->address,
            'contact_number' => fake()->phoneNumber,
            'type' => fake()->randomElement(['bidder','client']),
        ];
    }
}

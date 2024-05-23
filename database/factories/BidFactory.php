<?php

namespace Database\Factories;

use App\Models\Entity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bid>
 */
class BidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $bidders = Entity::where('type','bidder')->pluck('id');
        return [
            'bidding_id' => fake()->numberBetween(1,100),
            'entity_id' => $bidders[fake()->numberBetween(0,count($bidders)-1)],
            'bid_amount' => fake()->numberBetween(500000,5000000)
        ];
    }
}

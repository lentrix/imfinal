<?php

namespace Database\Factories;

use App\Models\Entity;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bidding>
 */
class BiddingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $clients = Entity::where('type','client')->pluck('id');

        return [
            'project_name' => fake()->words(3, true),
            'project_description' => fake()->paragraph(1),
            'completion_date' => Carbon::now()->addYears(fake()->numberBetween(5,30))->addDays(fake()->numberBetween(30,160)),
            'entity_id' => $clients[fake()->numberBetween(0, count($clients)-1)]
        ];
    }
}

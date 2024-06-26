<?php

namespace Modules\Listing\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'headline'=> fake()->city(),
            'beds' => fake()->numberBetween(1,7),
            'baths' => fake()->numberBetween(1,7),
            'area' => fake()->numberBetween(80,600),
            'city'=> fake()->city(),
            'code'=> fake()->postcode(),
            'street'=> fake()->streetName(),
            'neighbourhood'=> fake()->city(),
            'description'=> fake()->paragraph(),
            'price'=> fake()->numberBetween(50_000, 10_000_000)
        ];
    }
}

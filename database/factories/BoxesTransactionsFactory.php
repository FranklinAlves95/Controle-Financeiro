<?php

namespace Database\Factories;

use App\Models\Boxes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\boxes_transactions>
 */
class BoxesTransactionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'box_id' => Boxes::inRandomOrder()->first()->id,
            'description' => $this->faker->randomElement(['Applications', 'Rescues']),
            'amount' => $this->faker->randomFloat(2, 10, 5000),
            'type' => $this->faker->randomElement(['income', 'expense']),
        ];
    }
}

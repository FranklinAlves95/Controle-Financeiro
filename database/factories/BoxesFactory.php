<?php

namespace Database\Factories;

use App\Models\Banks;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bank_boxes>
 */
class BoxesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bank_id' => \App\Models\Banks::pluck('id')->random(),
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'balance' => $this->faker->randomFloat(2, 0, 10000),
            'is_active' => $this->faker->boolean(90),
        ];
    }
}

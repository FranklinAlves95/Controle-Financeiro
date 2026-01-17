<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CreditCard>
 */
class CreditCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'user_id'     => User::factory(),
        'name'        => $this->faker->company(),
        'brand'       => $this->faker->randomElement(['Visa', 'MasterCard', 'Elo']),
        'limit'       => $this->faker->randomFloat(2, 1000, 15000),
        'closing_day' => $this->faker->numberBetween(1, 28),
        'due_day'     => $this->faker->numberBetween(1, 28),
        'is_active'   => true,
    ];
}

}

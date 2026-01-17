<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\banks>
 */
class BanksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'user_id' => \App\Models\User::pluck('id')->random(),
        'name' => $this->faker->randomElement([
            'Nubank',
            'Itaú',
            'Banco do Brasil',
            'Bradesco',
            'Inter',
        ]),
        'account_type' => $this->faker->randomElement([
            'checking',
            'savings',
            'digital',
        ]),
        'is_active' => $this->faker->boolean(50), // 90% chance of being active
    ];
}

}

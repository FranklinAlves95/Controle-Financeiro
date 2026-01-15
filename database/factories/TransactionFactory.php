<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;
use App\Models\Transaction;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition(): array
    {
        $type = $this->faker->randomElement(['income', 'expense']);
        $user = User::inRandomOrder()->first() ?? User::factory();
        $category = Category::where('type', $type)->inRandomOrder()->first() ?? Category::factory()->state(['type' => $type]);

        return [
            'description' => $this->faker->sentence(3),
            'amount' => $this->faker->randomFloat(2, 1, 500),
            'transaction_date' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'type' => $this->faker->randomElement(['income', 'expense']),
            'user_id' => \App\Models\User::factory(),
            'category_id' => \App\Models\Category::factory(),
        ];
    }
}

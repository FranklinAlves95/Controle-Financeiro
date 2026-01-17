<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = \App\Models\Category::class;

    public function definition(): array
    {
        $expenseCategories = [
            'Alimentação',
            'Transporte',
            'Moradia',
            'Lazer',
            'Saúde',
            'Educação',
        ];

        $incomeCategories = [
            'Salário',
            'Investimentos',
            'Freelance',
            'Bônus',
        ];

        $type = $this->faker->randomElement(['income', 'expense']);

        return [
            'name' => $type === 'income'
                ? $this->faker->randomElement($incomeCategories)
                : $this->faker->randomElement($expenseCategories),
            'type' => $type,
            'user_id' => User::factory(),
        ];
    }
}


<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;

class CategorySeeder extends Seeder
{
    public function run(): void
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

        User::factory(5)->create()->each(function ($user) use ($expenseCategories, $incomeCategories) {

            foreach ($expenseCategories as $name) {
                Category::create([
                    'name' => $name,
                    'type' => 'expense',
                    'user_id' => $user->id,
                ]);
            }

            foreach ($incomeCategories as $name) {
                Category::create([
                    'name' => $name,
                    'type' => 'income',
                    'user_id' => $user->id,
                ]);
            }
        });
    }
}


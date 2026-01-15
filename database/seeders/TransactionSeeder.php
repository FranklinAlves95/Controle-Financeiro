<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\User;

class TransactionSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first() ?? User::factory()->create();

$categories = Category::where('user_id', $user->id)->get();

if ($categories->isEmpty()) {
    $categories = Category::factory(6)->for($user)->create();
}

Transaction::factory(50)->create([
    'user_id' => $user->id,
    'category_id' => $categories->random()->id,
]);

    }
}

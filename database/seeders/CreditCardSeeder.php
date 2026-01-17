<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CreditCard;

class CreditCardSeeder extends Seeder
{
    public function run(): void
    {
        CreditCard::factory()->count(10)->create();
    }
}

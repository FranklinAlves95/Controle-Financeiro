<?php

namespace Database\Seeders;

use App\Models\BoxesTransactions;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BanksSeeder::class,
            BoxesSeeder::class,
            BoxesTransactionsSeeder::class,
            CategorySeeder::class,
            TransactionSeeder::class,
            CreditCardSeeder::class,
            CreditCardTransactionSeeder::class,
            CreditCardInvoiceSeeder::class,
        ]);
    }
}

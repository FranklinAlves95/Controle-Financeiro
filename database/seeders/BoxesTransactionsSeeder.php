<?php

namespace Database\Seeders;

use App\Models\Boxes;
use App\Models\BoxesTransactions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoxesTransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BoxesTransactions::factory(10)->create();
    }
}

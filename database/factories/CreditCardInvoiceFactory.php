<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CreditCardInvoice;
use App\Models\CreditCard;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CreditCardInvoice>
 */
class CreditCardInvoiceFactory extends Factory
{
    protected $model = CreditCardInvoice::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'credit_card_id' => CreditCard::factory(),
            'reference_month' => $this->faker->date(),
            'amount' => $this->faker->randomFloat(2, 0, 10000),
            'status' => $this->faker->randomElement(['open', 'closed', 'paid']),
        ];
    }
}


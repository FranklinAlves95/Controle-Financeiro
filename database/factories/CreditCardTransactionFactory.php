<?php

namespace Database\Factories;

use App\Models\Banks;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CreditCardTransaction;
use App\Models\CreditCard;
use App\Models\CreditCardInvoice;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CreditCardTransaction>
 */
class CreditCardTransactionFactory extends Factory
{
    protected $model = CreditCardTransaction::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $installments = $this->faker->numberBetween(1, 12);
        return [
            'credit_card_id' => CreditCard::inRandomOrder()->first()->id,
            'credit_card_invoice_id' => CreditCardInvoice::factory(),
            'description' => $this->faker->randomElement(['Supermercado', 'Farmácia', 'Posto de Gasolina', 'Restaurante', 'Loja de Roupas', 'laser', 'academia', 'assinatura streaming', 'reforma casa', 'eletrônicos']),
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'installments' => $installments,
            'bank_id' => Banks::factory(),
        ];
    }
}

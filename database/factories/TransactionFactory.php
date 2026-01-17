<?php

namespace Database\Factories;

use App\Models\Banks;
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
            'description' => $this->faker->randomElement([
        'Supermercado',
        'Farmácia',
        'Posto de Gasolina',
        'Restaurante',
        'Lanchonete',
        'Padaria',
        'Delivery de Comida',
        'Loja de Roupas',
        'Loja de Calçados',
        'Eletrônicos',
        'Assistência Técnica',
        'Academia',
        'Personal Trainer',
        'Mensalidade Escolar',
        'Curso Online',
        'Assinatura de Streaming',
        'Internet',
        'Telefone',
        'Energia Elétrica',
        'Água',
        'Aluguel',
        'Condomínio',
        'Reforma da Casa',
        'Manutenção Residencial',
        'Transporte por Aplicativo',
        'Estacionamento',
        'Viagem',
        'Hotel',
        'Lazer',
        'Cinema',
        'Show ou Evento'
]),

            'amount' => $this->faker->randomFloat(2, 1, 500)
                * $this->faker->randomElement([1, -1]),
            'transaction_date' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'type' => $this->faker->randomElement(['income', 'expense']),
            'user_id' => User::pluck('id')->random(),
            'category_id' => Category::pluck('id')->random(),
            'bank_id'     => Banks::factory(),
        ];
    }
}

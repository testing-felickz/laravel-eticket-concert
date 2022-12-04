<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $total = rand(1,5);

        return [
            'concert_id' => rand(1,10),
            'user_id' => rand(1,10),
            'transaction_code' => strtoupper(fake()->lexify()) . '-' . uniqid() . '-' . date('dmY') . '-' . rand(1,10),
            'quantity' => $total,
            'total_payment' => rand(100,250) . '000' * $total,
            'payment_date' => now()
        ];
    }
}

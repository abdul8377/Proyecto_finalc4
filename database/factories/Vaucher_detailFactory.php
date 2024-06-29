<?php

namespace Database\Factories;

use App\Models\Payment_proof;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vaucher_detail>
 */
class Vaucher_detailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'payment_proof_id' => Payment_proof::all()->random()->id,
            'product_id' => Product::all()->random()->id,
            'amount' => $this->faker->numberBetween(1, 100),
            'unit_price' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}

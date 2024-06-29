<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment_proof>
 */
class Payment_proofFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::all()->random()->id,
            'employee_id' => Employee::all()->random()->id,
            'date' => $this->faker->date,
            'Total' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'dni' => $this->faker->numerify('########'),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'birthdate' => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
        ];
    }
}

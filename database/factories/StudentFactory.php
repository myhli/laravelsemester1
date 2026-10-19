<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nis' => (string) fake()->unique()->numerify('102###'),
            'name' => fake('id_ID')->name(),
            'classroom' => fake()->randomElement(['10 PPLG 1', '11 PPLG 2', '12 PPLG 3']),
            'status' => fake()->randomElement(['Active', 'Inactive']),
        ];
    }
}

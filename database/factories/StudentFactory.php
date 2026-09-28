<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $classrooms = [
            '10 Animasi 1', '11 Animasi 2', '12 Animasi 3', '13 Animasi 4', '11 Animasi 5',
            '10 DKV 1', '12 DKV 2', '11 DKV 3', '10 DKV 4', '11 DKV 5',
            '11 PPLG 1', '10 PPLG 2', '10 PPLG 3',
        ];

        return [
            'nis' => (string) fake()->unique()->numerify('102###'),
            'name' => fake()->name(),
            'classroom' => fake()->randomElement($classrooms),
        ];
    }
}

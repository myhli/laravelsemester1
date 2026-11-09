<?php

namespace Database\Factories;

use App\Models\Classroom;
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
        return [

            'name' => fake()->name(),
            'nis' => fake()->randomNumber(5, false),
            'classroom_id' => Classroom::inRandomOrder()->value('id') ?? Classroom::factory(),
            'address' => fake()->address(),

        ];
    }
}

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
            // // numerify akan membuat angka acak berawalan 102, misalnya 102456
            // 'nis' => fake()->unique()->numerify('102###'),

            // // name() akan membuat nama orang acak
            // 'name' => fake('id_ID')->name(),

            // // Mengambil salah satu kelas secara acak
            // 'classroom' => fake()->randomElement(['10 PPLG 1', '10 PPLG 2', '11 PPLG 1', '11 PPLG 2']),

            // // Mengambil status secara acak
            // 'status' => fake()->randomElement(['Active', 'Inactive']),

            // 'address' => fake('id_ID')->address(),

            'name' => fake()->name(),
            'nis' => fake()->randomNumber(5, false),
            'classroom_id' => Classroom::factory(),
            'address' => fake()->address(),

        ];
    }
}

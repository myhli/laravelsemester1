<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->randomElement(['XI PPLG 1', 'XI PPLG 2', 'XI PPLG 3', 'XI DKV 1', 'XI ANIMASI 1', 'XII PPLG 1', 'XII PPLG 2', 'XII DKV 1', 'XII ANIMASI 1', 'XII ANIMASI 3']);

        return [
            'name' => $name,
            'major' => explode(' ', $name)[1],
        ];
    }
}

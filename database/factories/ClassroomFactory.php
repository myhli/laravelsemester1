<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClassroomFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(['10 PPLG 1', '11 PPLG 2', '12 PPLG 3']),
            'major' => fake()->randomElement(['PPLG', 'DKV', 'ANIMASI']),
        ];
    }
}

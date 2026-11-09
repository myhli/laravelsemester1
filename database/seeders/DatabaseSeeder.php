<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(StudentSeeder::class);

        Student::factory(10)->create();

        Classroom::factory(5)
            ->hasStudents(3)
            ->create();

        // Subject::factory(10)->create();

        Teacher::factory(10)->create();

        // User::factory(10)->create();

    }
}

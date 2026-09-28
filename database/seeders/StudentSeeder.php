<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['nis' => '102401', 'name' => 'Aditya Pratama', 'classroom' => '10 Animasi 1'],
            ['nis' => '102402', 'name' => 'Budi Santoso', 'classroom' => '11 Animasi 2'],
            ['nis' => '102403', 'name' => 'Citra Lestari', 'classroom' => '12 Animasi 3'],
            ['nis' => '102404', 'name' => 'Dewi Anggraini', 'classroom' => '13 Animasi 4'],
            ['nis' => '102405', 'name' => 'Eko Prasetyo', 'classroom' => '11 Animasi 5'],
            ['nis' => '102406', 'name' => 'Fajar Nugroho', 'classroom' => '10 DKV 1'],
            ['nis' => '102407', 'name' => 'Gita Permata', 'classroom' => '12 DKV 2'],
            ['nis' => '102408', 'name' => 'Hendra Setiawan', 'classroom' => '11 DKV 3'],
            ['nis' => '102409', 'name' => 'Indah Kusuma', 'classroom' => '10 DKV 4'],
            ['nis' => '102410', 'name' => 'Joko Widodo', 'classroom' => '11 DKV 5'],
            ['nis' => '102411', 'name' => 'Kartika Sari', 'classroom' => '11 PPLG 1'],
            ['nis' => '102412', 'name' => 'Lukman Hakim', 'classroom' => '10 PPLG 2'],
            ['nis' => '102413', 'name' => 'Maya Safitri', 'classroom' => '10 PPLG 3'],
        ];

        foreach ($students as $student) {
            Student::updateOrCreate(
                ['nis' => $student['nis']],
                $student
            );
        }
    }
}

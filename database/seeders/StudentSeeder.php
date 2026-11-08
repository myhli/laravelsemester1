<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rawStudents = [
            ['nis' => 101, 'name' => 'Budi Sentosa', 'classroom' => 'X RPL 2', 'address' => 'Kudus', 'status' => 'Active'],
            ['nis' => 102, 'name' => 'Budi Makmur', 'classroom' => 'X RPL 2', 'address' => 'Kudus', 'status' => 'Inactive'],
            ['nis' => 103, 'name' => 'Jaya Budi', 'classroom' => 'X RPL 2', 'address' => 'Demak', 'status' => 'Active'],
            ['nis' => 110, 'name' => 'Artoria Pendragon', 'classroom' => 'X Anim 1', 'address' => 'Pati', 'status' => 'Active'],
            ['nis' => 111, 'name' => 'Aulia Aurelia', 'classroom' => 'X Anim 1', 'address' => 'Jepara', 'status' => 'Inactive'],
            ['nis' => 122, 'name' => 'Morgan le Fay', 'classroom' => 'X Anim 3', 'address' => 'Kudus', 'status' => 'Active'],
            ['nis' => 201, 'name' => 'Bagas Satgas', 'classroom' => 'X DKV 1', 'address' => 'Kudus', 'status' => 'Active'],
            ['nis' => 202, 'name' => 'Yung Lex', 'classroom' => 'X DKV 1', 'address' => 'Semarang', 'status' => 'Inactive'],
            ['nis' => 203, 'name' => 'Rae Rayhan', 'classroom' => 'X DKV 1', 'address' => 'Kudus', 'status' => 'Active'],
            ['nis' => 204, 'name' => 'Queen Lacrimosa', 'classroom' => 'X DKV 1', 'address' => 'Pati', 'status' => 'Active'],
        ];

        foreach ($rawStudents as $student) {

            $jurusan = explode(' ', $student['classroom'])[1] ?? 'Umum';

            $classroom = Classroom::firstOrCreate(
                ['name' => $student['classroom']],
                ['major' => $jurusan]
            );

            unset($student['classroom']);
            $student['classroom_id'] = $classroom->id;

            Student::create($student);
        }
    }
}

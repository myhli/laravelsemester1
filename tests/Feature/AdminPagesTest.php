<?php

namespace Tests\Feature;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_pages_load_successfully(): void
    {
        $classroom = Classroom::create([
            'name' => 'XI PPLG 2',
            'major' => 'PPLG',
        ]);

        Student::create([
            'nis' => '12345',
            'name' => 'John Doe',
            'classroom_id' => $classroom->id,
            'address' => 'Kudus',
        ]);

        $subject = Subject::create([
            'name' => 'Matematika',
        ]);

        Teacher::create([
            'name' => 'Bu Ani',
            'niy' => 1234567890,
            'subject_id' => $subject->id,
            'start_date' => '2024-01-01',
        ]);

        $this->get('/admin/dashboard')->assertStatus(200);
        $this->get('/admin/about')->assertStatus(200);
        $this->get('/admin/student')->assertStatus(200)->assertSee('John Doe');
        $this->get('/admin/classroom')->assertStatus(200)->assertSee('XI PPLG 2');
        $this->get('/admin/subjects')->assertStatus(200)->assertSee('Matematika');
        $this->get('/admin/teachers')->assertStatus(200)->assertSee('Bu Ani');
    }
}

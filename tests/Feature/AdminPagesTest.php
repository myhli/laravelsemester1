<?php

namespace Tests\Feature;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_student_and_classroom_pages_load_successfully(): void
    {
        Student::create([
            'nis' => '12345',
            'name' => 'John Doe',
            'classroom' => 'XI PPLG 2',
            'status' => 'Active',
        ]);

        Classroom::create([
            'name' => 'XI PPLG 2',
            'major' => 'PPLG',
        ]);

        $this->get('/admin/dashboard')->assertStatus(200);
        $this->get('/Admin/dashboard')->assertStatus(200);
        $this->get('/admin/about')->assertStatus(200);
        $this->get('/Admin/about')->assertStatus(200);
        $this->get('/admin/student')->assertStatus(200)->assertSee('John Doe');
        $this->get('/Admin/Student')->assertStatus(200)->assertSee('John Doe');
        $this->get('/admin/classroom')->assertStatus(200)->assertSee('XI PPLG 2');
        $this->get('/Admin/Classroom')->assertStatus(200)->assertSee('XI PPLG 2');
    }
}

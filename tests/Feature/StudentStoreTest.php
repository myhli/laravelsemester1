<?php

namespace Tests\Feature;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentStoreTest extends TestCase
{
    use RefreshDatabase;

    public function test_student_can_be_created_from_form(): void
    {
        $classroom = Classroom::factory()->create();

        $response = $this->post('/admin/student', [
            'nis' => '102999',
            'name' => 'Siswa Baru',
            'classroom_id' => $classroom->id,
            'address' => 'Kudus',
        ]);

        $response->assertRedirect(route('admin.student.index'));
        $this->assertDatabaseHas('students', [
            'nis' => '102999',
            'name' => 'Siswa Baru',
            'classroom_id' => $classroom->id,
            'address' => 'Kudus',
        ]);
    }

    public function test_store_requires_all_fields(): void
    {
        $response = $this->post('/admin/student', []);

        $response->assertSessionHasErrors(['nis', 'name', 'classroom_id', 'address']);
        $this->assertDatabaseCount('students', 0);
    }

    public function test_nis_must_be_unique(): void
    {
        $classroom = Classroom::factory()->create();
        Student::factory()->create(['nis' => '102999', 'classroom_id' => $classroom->id]);

        $response = $this->post('/admin/student', [
            'nis' => '102999',
            'name' => 'Siswa Duplikat',
            'classroom_id' => $classroom->id,
            'address' => 'Kudus',
        ]);

        $response->assertSessionHasErrors('nis');
        $this->assertDatabaseCount('students', 1);
    }

    public function test_classroom_must_exist(): void
    {
        $response = $this->post('/admin/student', [
            'nis' => '102999',
            'name' => 'Siswa Baru',
            'classroom_id' => 9999,
            'address' => 'Kudus',
        ]);

        $response->assertSessionHasErrors('classroom_id');
        $this->assertDatabaseCount('students', 0);
    }

    public function test_student_page_shows_classroom_options_and_modal(): void
    {
        Classroom::factory()->create(['name' => 'XI PPLG 2']);

        $this->get('/admin/student')
            ->assertStatus(200)
            ->assertSee('createStudentModal', false)
            ->assertSee('XI PPLG 2');
    }
}

<?php

namespace App\Models;

use Database\Factories\ClassroomFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    /** @use HasFactory<ClassroomFactory> */
    use HasFactory;

    protected $table = 'classrooms';

    protected $fillable = ['name', 'major'];

    public function students()
    {
        return $this->hasMany(Student::class, 'classroom_id');
    }
}

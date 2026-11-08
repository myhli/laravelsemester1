<?php

namespace App\Models;

use Database\Factories\TeacherFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @use HasFactory<TeacherFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'niy',
        'subject_id',
        'start_date',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}

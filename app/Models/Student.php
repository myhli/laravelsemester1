<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'name',
        'classroom',
        'status',
    ];

    public function getClassAttribute(): ?string
    {
        return $this->classroom;
    }

    public function getKeadaanAttribute(): ?string
    {
        return $this->status;
    }
}

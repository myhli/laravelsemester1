<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Contracts\View\View;

class ClassroomController extends Controller
{
    public function index(): View
    {
        $title = 'Classroom';
        $classrooms = Classroom::all();

        return view('admin.classroom.classroom', compact('title', 'classrooms'));
    }
}

<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::view('/layout', 'layout');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/Admin/dashboard', [DashboardController::class, 'admindashboard'])->name('Admin.dashboard');

Route::get('/admin/about', [AboutController::class, 'index'])->name('admin.about');
Route::get('/Admin/about', [AboutController::class, 'adminabout'])->name('Admin.about');

Route::prefix('admin')
    ->group(function () {
        Route::get('/student', [StudentController::class, 'index'])
            ->name('admin.student');
        Route::get('/classroom', [ClassroomController::class, 'index'])
            ->name('admin.classroom');
    });

Route::redirect('/admin/students', '/admin/student');
Route::redirect('/admin/classrooms', '/admin/classroom');

Route::get('/Admin/Student', [StudentController::class, 'index'])->name('Admin.Student.index');
Route::get('/Admin/Classroom', [ClassroomController::class, 'index'])->name('Admin.Classroom.classroom');

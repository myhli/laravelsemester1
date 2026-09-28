<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::view('/layout', 'layout');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/about', function () {
    return view('admin.about');
})->name('admin.about');

Route::prefix('admin')
    ->group(function () {
        // STUDENT
        Route::get('/student', [StudentController::class, 'index'])
            ->name('admin.student.index');
    });

Route::redirect('/admin/students', '/admin/student');

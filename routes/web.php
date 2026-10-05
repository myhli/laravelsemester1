<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::view('/layout', 'layout');

Route::get('/admin/dashboard', [dashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/about', [AboutController::class, 'index'])->name('admin.about');

Route::prefix('admin')
    ->group(function () {
        Route::get('/student', [StudentController::class, 'index'])
            ->name('admin.student');
    });

Route::redirect('/admin/students', '/admin/student');

<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class dashboardController extends Controller
{
    public function index(): View
    {
        $title = 'Dashboard';
        $content = 'Selamat Datang di halaman administrator';

        return view('admin.dashboard', compact('title', 'content'));
    }
}

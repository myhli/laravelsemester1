<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $title = 'Dashboard';
        $content = 'Selamat Datang di halaman administrator';

        return view('admin.dashboard', compact('title', 'content'));
    }

    public function admindashboard(): View
    {
        return $this->index();
    }
}

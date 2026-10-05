<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(): View
    {
        $title = 'About :';
        $content = [
            'name' => 'Irham mada izzatila',
            'github' => 'github.com/myhli',
        ];
        return view('admin.about', compact('title', 'content'));
    }
}

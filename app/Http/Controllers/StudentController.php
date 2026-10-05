<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        $title = 'Students';

        $students = [
            [
                'nis' => '20260001',
                'name' => 'Ahmad Fauzan',
                'class' => 'XI PPLG 1',
                'status' => 'Active',
            ],
            [
                'nis' => '20260002',
                'name' => 'Muhammad Rizky',
                'class' => 'XI PPLG 2',
                'status' => 'Active',
            ],
            [
                'nis' => '20260003',
                'name' => 'Bagus Setiawan',
                'class' => 'XI PPLG 1',
                'status' => 'Active',
            ],
            [
                'nis' => '20260004',
                'name' => 'Dimas Pratama',
                'class' => 'X PPLG 1',
                'status' => 'Inactive',
            ],
            [
                'nis' => '20260005',
                'name' => 'Rizky Ramadhan',
                'class' => 'X PPLG 2',
                'status' => 'Active',
            ],
            [
                'nis' => '20260006',
                'name' => 'Siti Nurhaliza',
                'class' => 'XI PPLG 1',
                'status' => 'Active',
            ],
            [
                'nis' => '20260007',
                'name' => 'Aditya Pratama',
                'class' => 'X PPLG 2',
                'status' => 'Inactive',
            ],
            [
                'nis' => '20260008',
                'name' => 'Fajar Nugroho',
                'class' => 'XI PPLG 2',
                'status' => 'Active',
            ],
            [
                'nis' => '20260009',
                'name' => 'Hendra Setiawan',
                'class' => 'X PPLG 1',
                'status' => 'Active',
            ],
            [
                'nis' => '06259',
                'name' => 'Irham mada Izzatila',
                'class' => 'XI PPLG 2',
                'status' => 'Active',
            ],
        ];

        return view('admin.student', compact('title', 'students'));
    }
}

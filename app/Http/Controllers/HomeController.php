<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Carlos Oliva',
            'bio' => 'SysAdmin | Web Developer',
            'skills' => ['PHP', 'Laravel', 'JavaScript', 'HTML', 'CSS'],
            'projects' => [
                ['title' => 'Proyecto 1', 'description' => 'Descripción del proyecto 1', 'link' => '#'],
                ['title' => 'Proyecto 2', 'description' => 'Descripción del proyecto 2', 'link' => '#'],
            ],
        ];

        return view('home', compact('data'));
    }
}

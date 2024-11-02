<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;

class HomeController extends Controller
{
    public function index()
    {
        $data = WorkExperience::orderBy('start_date', 'desc')->get();

        $workExperiences = WorkExperience::orderBy('start_date', 'desc')->get();

        $data = [
            'name' => 'Carlos Oliva',
            'workExperience' => $workExperiences
        ];
        return view('home', compact('data'));
    }
}

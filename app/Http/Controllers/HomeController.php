<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\WorkExperience;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        // Obtener la experiencia laboral
        $workExperiences = WorkExperience::orderBy('start_date', 'desc')->get();

        // Obtener la educación y formatear las fechas
        $education = Education::all()->map(function ($item) {
            return [
                'institution' => $item->institution,
                'degree' => $item->degree,
                'location' => $item->location,
                'start_date' => Carbon::parse($item->start_date)->translatedFormat('M Y'), // Formato en español
                'end_date' => $item->end_date ? Carbon::parse($item->end_date)->translatedFormat('M Y') : null,
            ];
        });

        // Enviar los datos a la vista
        $data = [
            'workExperience' => $workExperiences,
            'education' => $education,
            'name' => 'Carlos', // Ejemplo de nombre
        ];

        return view('home', compact('data'));
    }
}

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
            'workExperience' => [
                [
                    'id' => 'job1',
                    'title' => 'Desarrollador Web en Company A',
                    'description' => 'Responsable del desarrollo y mantenimiento de sitios web, trabajando en colaboración con equipos de diseño y marketing.',
                ],
                [
                    'id' => 'job2',
                    'title' => 'Desarrollador Backend en Company B',
                    'description' => 'Desarrollo de APIs y gestión de bases de datos para aplicaciones web, asegurando un rendimiento óptimo.',
                ],
                [
                    'id' => 'job3',
                    'title' => 'Practicante en Company C',
                    'description' => 'Asistir en el desarrollo de aplicaciones web y realizar pruebas de funcionalidad.',
                ],
            ],
        ];

        return view('home', compact('data'));
    }
}

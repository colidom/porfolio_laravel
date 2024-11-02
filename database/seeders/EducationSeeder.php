<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    public function run()
    {
        Education::create([
            'institution' => 'I.E.S Lope de Vega',
            'location' => 'Madrid',
            'degree' => 'Desarrollador de Aplicaciones Web (DAW)',
            'start_date' => '2023-09-01',
            'end_date' => '2024-06-30',
        ]);

        Education::create([
            'institution' => 'I.E.S Telesforo Bravo',
            'location' => 'Puerto de la Cruz',
            'degree' => 'Desarrollador de Aplicaciones Web (DAW)',
            'start_date' => '2022-11-01',
            'end_date' => '2023-06-30',
        ]);

        Education::create([
            'institution' => 'UA - Universidad de Alicante',
            'location' => 'Alicante',
            'degree' => 'Introducción al desarrollo web',
            'start_date' => '2018-01-01',
            'end_date' => null,
        ]);

        Education::create([
            'institution' => 'I.E.S Telesforo Bravo',
            'location' => 'Puerto de la Cruz',
            'degree' => 'Administrador de Sistemas Informáticos en Red',
            'start_date' => '2015-01-01',
            'end_date' => '2018-01-01',
        ]);
    }
}

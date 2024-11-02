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
            'degree' => 'Desarrollador de Aplicaciones Web (DAW)',
            'location' => 'Madrid',
            'start_date' => '2023-09-01',
            'end_date' => '2024-06-30',
        ]);

        Education::create([
            'institution' => 'I.E.S - Telesforo Bravo',
            'degree' => 'Desarrollador de Aplicaciones Web (DAW)',
            'location' => 'Tenerife',
            'start_date' => '2022-09-01',
            'end_date' => '2023-06-30',
        ]);

        Education::create([
            'institution' => 'UA - Universidad de Alicante',
            'degree' => 'Introducción al desarrollo web',
            'location' => 'Alicante',
            'start_date' => '2018-01-01',
            'end_date' => '2018-12-31',
        ]);

        Education::create([
            'institution' => 'I.E.S - Telesforo Bravo',
            'degree' => 'Administrador de Sistemas Informáticos en Red',
            'location' => 'Tenerife',
            'start_date' => '2015-01-01',
            'end_date' => '2018-12-31',
        ]);
    }
}

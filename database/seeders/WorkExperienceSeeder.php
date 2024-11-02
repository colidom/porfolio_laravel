<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WorkExperience;

class WorkExperienceSeeder extends Seeder
{
    public function run()
    {
        WorkExperience::create([
            'company_name' => 'Ejemplo S.A.',
            'position' => 'Desarrollador Full Stack',
            'description' => 'Desarrollo de aplicaciones web con Laravel y Vue.js.',
            'start_date' => '2022-01-01',
            'end_date' => '2023-01-01',
        ]);
    }
}

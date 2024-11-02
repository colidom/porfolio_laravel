<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WorkExperience;

class WorkExperienceSeeder extends Seeder
{
    public function run()
    {
        WorkExperience::create([
            'company_name' => 'Eviden',
            'position' => 'Desarrollador IoT',
            'description' => 'Trabajando como desarrollador IoT con tecnologías como ThingWorx Composer, JavaScript y MQTT en un proyecto para Vodafone y el Ministerio de Igualdad. Disfruto cada momento creando soluciones IoT innovadoras y eficientes con estas tecnologías.',
            'start_date' => '2024-07-01',
            'end_date' => null,
            'location' => 'Comunidad de Madrid, España',
        ]);

        WorkExperience::create([
            'company_name' => 'Eviden',
            'position' => 'Especialista en Soporte Técnico - Sala Cometa',
            'description' => 'Me desempeño como Especialista en Soporte Técnico, brindando asistencia para la aplicación CRA en un proyecto conjunto entre Vodafone y Securitas, enfocado en el seguimiento telemático de prohibiciones de aproximación en casos de violencia de género y sexual.',
            'start_date' => '2024-02-01',
            'end_date' => null, // Actualidad
            'location' => 'Madrid, Comunidad de Madrid, España',
        ]);

        WorkExperience::create([
            'company_name' => 'Eviden',
            'position' => 'Desarrollador Web',
            'description' => 'Desarrollé aplicaciones web robustas y eficientes utilizando Spring MVC, JSP y Hibernate para los clientes EDP y Viesgo.',
            'start_date' => '2023-09-01',
            'end_date' => '2024-02-28',
            'location' => 'Santa Cruz de Tenerife, Canarias, España',
        ]);

        WorkExperience::create([
            'company_name' => 'Atos IT Solutions and Services A/S',
            'position' => 'Desarrollador de eCommerce',
            'description' => 'Desarrollo de módulo/plugin e-commerce en las plataformas PrestaShop y Woocommerce para el cliente Correos, integrando servicios de paquetería nacional e internacional.',
            'start_date' => '2021-06-01',
            'end_date' => '2023-04-30',
            'location' => 'Santa Cruz de Tenerife, Canarias, España',
        ]);

        WorkExperience::create([
            'company_name' => 'Atos IT Solutions and Services A/S',
            'position' => 'Desarrollador SOA',
            'description' => 'Desarrollador SOA en el Centro de Excelencia para el desarrollo y la innovación CEDeI, formando parte del equipo de integración de sistemas en el cliente Grupo Correos.',
            'start_date' => '2019-08-01',
            'end_date' => '2021-06-30',
            'location' => '38612 Granadilla, Santa Cruz de Tenerife',
        ]);

        WorkExperience::create([
            'company_name' => 'ITER - Instituto Tecnológico y de Energías Renovables, S.A.',
            'position' => 'Becario',
            'description' => 'Realicé un contrato de formación en el Instituto Tecnológico y de Energías Renovables.',
            'start_date' => '2018-08-01',
            'end_date' => '2019-08-31',
            'location' => '38612 Granadilla, Santa Cruz de Tenerife',
        ]);
    }
}

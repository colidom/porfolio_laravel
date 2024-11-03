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
            'description' => 'Trabajando como desarrollador IoT con tecnologías como ThingWorx Composer, JavaScript y MQTT en un proyecto para Vodafone y el Ministerio de Igualdad. Disfruto cada momento creando soluciones IoT innovadoras y eficientes con estas tecnologías. ¡Emocionado por lo que está por venir en este emocionante viaje en el mundo del IoT! 🚀',
            'start_date' => '2024-07-01',
            'end_date' => null,
            'location' => 'Comunidad de Madrid, España',
        ]);

        WorkExperience::create([
            'company_name' => 'Eviden',
            'position' => 'Especialista en Soporte Técnico - Sala Cometa',
            'description' => 'Actualmente, me desempeño como Especialista en Soporte Técnico en la Sala Cometa de Securitas, donde también ejerzo labores de team leading. Brindo asistencia para la aplicación CRA en un proyecto conjunto entre Vodafone y Securitas para el Ministerio de Igualdad, enfocado en el seguimiento telemático de prohibiciones de aproximación en casos de violencia de género y sexual.
                En este rol, colaboro estrechamente con ambos equipos, gestionando incidentes, cambios y problemas para asegurar la continuidad del servicio. Esto me ha permitido fortalecer mis habilidades en la gestión de servicios técnicos y operativos, liderando al equipo para garantizar una experiencia de usuario óptima y la entrega exitosa de los proyectos.',
            'start_date' => '2024-02-07',
            'end_date' => null, // Actualidad
            'location' => 'Madrid, Comunidad de Madrid, España',
        ]);

        WorkExperience::create([
            'company_name' => 'Eviden',
            'position' => 'Desarrollador Web',
            'description' => 'Desarrollé aplicaciones web robustas y eficientes utilizando Spring MVC, JSP y Hibernate para los clientes EDP y Viesgo. Cada momento de esta experiencia fue una oportunidad para sumergirme en la creación de soluciones innovadoras y funcionales. Me emociona profundamente el progreso alcanzado hasta ahora y estoy ansioso por los nuevos desafíos que se presentarán en este apasionante viaje de desarrollo web.',
            'start_date' => '2023-09-01',
            'end_date' => '2024-02-01',
            'location' => 'Santa Cruz de Tenerife, Canarias, España',
        ]);

        WorkExperience::create([
            'company_name' => 'Atos - Eviden',
            'position' => 'Desarrollador de eCommerce',
            'description' => 'Mi labor consiste en desarrollar módulos de alta calidad para las plataformas e-commerce PrestaShop y Woocommerce, con el objetivo de integrar servicios de paquetería nacional e internacional (Correos y Correos Express), haciendo de la gestión de los pedidos de los clientes una tarea rápida y sencilla.
                Para lograr este objetivo, utilizo un conjunto de tecnologías avanzadas que incluyen PHP, JavaScript, Python, SQL, servicios REST y SOAP, HTML5, CSS3, jQuery y Bootstrap. Estas herramientas me permiten diseñar y desarrollar módulos eficaces y eficientes, que proporcionan una excelente experiencia de usuario y cumplen con los más altos estándares de calidad.',
            'start_date' => '2021-06-05',
            'end_date' => '2023-08-25',
            'location' => 'Santa Cruz de Tenerife, Canarias, España',
        ]);

        WorkExperience::create([
            'company_name' => 'Atos IT Solutions and Services A/S',
            'position' => 'Desarrollador SOA',
            'description' => 'Desarrollador SOA (Arquitectura Orientada a Servicios) en el Centro de Excelencia para el desarrollo y la innovación CEDeI. Actualmente formo parte del equipo de integración de sistemas en el cliente Grupo Correos. Uso de herramientas IBM Integration Bus (WebSphere Message Broker).',
            'start_date' => '2019-08-16',
            'end_date' => '2021-06-05',
            'location' => '38612 Granadilla, Santa Cruz de Tenerife',
        ]);

        WorkExperience::create([
            'company_name' => 'ITER - Instituto Tecnológico y de Energías Renovables, S.A.',
            'position' => 'Becario',
            'description' => 'Becario del programa CEDeI que promueve la creación de un plan de formación y empleo en el sector tecnológico, especialmente en el campo de las Tecnologías de la Información y la Innovación en Ciencia.',
            'start_date' => '2018-08-16',
            'end_date' => '2019-08-16',
            'location' => '38612 Granadilla, Santa Cruz de Tenerife',
        ]);
    }
}

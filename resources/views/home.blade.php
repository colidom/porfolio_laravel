<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - {{ isset($data['name']) ? $data['name'] : 'Nombre no disponible' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/heroicons@1.0.6/outline.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-gray-200 font-sans">
    <div class="min-h-screen flex flex-col md:flex-row justify-center p-4 sm:p-6 md:p-8">
        <div class="w-full max-w-7xl flex flex-col md:flex-row">
            <!-- Panel izquierdo -->
            <div class="w-full md:w-1/3 lg:w-1/4 space-y-4">
                <aside class="bg-gray-800 p-4 sm:p-6 shadow-md rounded-lg">
                    <div class="text-center">
                        <!-- Foto de perfil -->
                        <div class="w-24 h-24 sm:w-32 sm:h-32 mx-auto rounded-full bg-gray-600 overflow-hidden">
                            <img src="/img/avatar.png" alt="Profile Photo" class="w-full h-full object-cover">
                        </div>
                        <p class="text-xs sm:text-sm text-gray-400 mt-4 mb-6">SysAdmin | Web Developer</p>
                    </div>

                    <!-- Redes Sociales -->
                    <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0 text-sm text-gray-400">
                        <a href="https://www.linkedin.com/in/cjod/" target="_blank"
                            class="flex items-center text-gray-200 transition-transform duration-300 transform hover:scale-105 hover:bg-gray-700 p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19.333 0h-14.666C2.835 0 0 2.835 0 6.667v10.666C0 21.165 2.835 24 6.667 24h14.666C21.165 24 24 21.165 24 17.333V6.667C24 2.835 21.165 0 17.333 0zM7.133 20.667H3.333V9h3.8v11.667zm-1.9-13.033c-1.22 0-2.2-.99-2.2-2.2 0-1.233.98-2.2 2.2-2.2 1.22 0 2.2.967 2.2 2.2 0 1.21-.98 2.2-2.2 2.2zM20.667 20.667h-3.8V14.8c0-1.37-.027-3.143-1.91-3.143-1.91 0-2.2 1.489-2.2 3.025v5.983h-3.8V9h3.8v1.6h.027c.527-.993 1.814-2.04 3.73-2.04 3.993 0 4.2 2.632 4.2 6.05v5.057h.027z" />
                            </svg>
                            LinkedIn
                        </a>
                        <a href="https://github.com/colidom" target="_blank"
                            class="flex items-center text-gray-200 transition-transform duration-300 transform hover:scale-105 hover:bg-gray-700 p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 .296C5.373.296 0 5.668 0 12.303c0 5.334 3.438 9.84 8.205 11.43.6.111.82-.261.82-.578 0-.288-.011-1.25-.017-2.27-3.338.725-4.041-1.607-4.041-1.607-.546-1.386-1.333-1.756-1.333-1.756-1.086-.742.083-.726.083-.726 1.204.085 1.838 1.234 1.838 1.234 1.067 1.826 2.8 1.297 3.48.992.108-.773.418-1.297.76-1.592-2.665-.303-5.466-1.332-5.466-5.928 0-1.31.469-2.383 1.239-3.22-.124-.303-.537-1.53.115-3.188 0 0 1.007-.322 3.302 1.227.958-.267 1.988-.4 3.005-.405 1.017.005 2.048.138 3.005.405 2.295-1.55 3.302-1.227 3.302-1.227.652 1.658.24 2.885.116 3.188.77.837 1.239 1.91 1.239 3.22 0 4.611-2.807 5.617-5.478 5.913.43.374.815 1.113.815 2.241 0 1.618-.015 2.924-.015 3.317 0 .319.218.696.825.578C20.565 22.142 24 17.633 24 12.303 24 5.668 18.627.296 12 .296z" />
                            </svg>
                            GitHub
                        </a>
                        <a href="mailto:colidom@outlook.com"
                            class="flex items-center text-gray-200 transition-transform duration-300 transform hover:scale-105 hover:bg-gray-700 p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 12.713l8.193-5.193c.195-.124.325-.344.325-.607V4.07c0-.552-.447-1-1-1H4.513c-.553 0-1 .448-1 1v2.843c0 .263.13.483.325.607L12 12.713zM12 14.062L4 9.045V20h16V9.045l-8 5.017z" />
                            </svg>
                            Email
                        </a>
                    </div>
                </aside>

                <!-- Sección Educación -->
                <aside class="bg-gray-800 p-4 sm:p-6 shadow-md rounded-lg">
                    <h2 class="text-2xl font-semibold text-gray-200 text-center">Educación</h2>
                    <hr class="my-6 border-gray-700 w-3/4 mx-auto">
                    <ul class="list-inside text-gray-400 text-sm">
                        @foreach ($data['education'] as $education)
                            <li class="mt-4">
                                <strong>{{ $education['institution'] }} - {{ $education['location'] }}</strong><br>
                                {{ $education['degree'] }}<br>
                                <span class="text-gray-500">
                                    {{ $education['start_date'] }} - {{ $education['end_date'] ?? 'Presente' }}
                                </span><br>
                            </li>
                        @endforeach
                    </ul>
                </aside>
            </div>

            <!-- Panel central -->
            <main class="w-full md:w-2/3 lg:w-3/4 bg-gray-800 p-4 mt-4 md:mt-0 sm:p-8 rounded-lg md:ml-4">
                <!-- Sección About Me -->
                <section class="py-8">
                    <h2 class="text-3xl font-semibold text-gray-200 text-center">Sobre mi</h2>
                    <hr class="my-6 border-gray-700 w-1/2 mx-auto">
                    <p class="text-gray-400 mb-6 text-lg leading-relaxed text-justify">
                        {{ $data['about']->description ?? 'Aún no se ha añadido ninguna descripción' }}
                    </p>
                </section>

                <!-- Sección de Lenguajes y herramientas -->
                <section class="py-8">
                    <h2 class="text-2xl font-semibold text-gray-200 text-center">Lenguajes y herramientas</h2>
                    <hr class="my-6 border-gray-700 w-1/2 mx-auto">
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-9 gap-3 mt-4">
                        <a href="https://www.python.org" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/python.svg" alt="Python Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://www.php.net" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/php.svg" alt="PHP Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://developer.mozilla.org/docs/Web/JavaScript" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/javascript.svg" alt="JavaScript Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://laravel.com" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/laravel.svg" alt="Laravel Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://symfony.com" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/symfony.svg" alt="Symfony Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://www.djangoproject.com" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/django.svg" alt="Django Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://flask.palletsprojects.com" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/flask.svg" alt="Flask Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://developer.mozilla.org/docs/Web/Guide/HTML/HTML5" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/html5.svg" alt="HTML5 Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://developer.mozilla.org/docs/Web/CSS" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/css3.svg" alt="CSS3 Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://sass-lang.com" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/sass.svg" alt="Sass Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://jquery.com" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/jquery.svg" alt="jQuery Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://getbootstrap.com" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/bootstrap.svg" alt="Bootstrap Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://tailwindcss.com" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/tailwindcss.svg" alt="Tailwind CSS Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://git-scm.com" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/git.svg" alt="Git Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://www.mysql.com" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/mysql.svg" alt="MySQL Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://www.postman.com" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/getpostman.svg" alt="Postman Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://getcomposer.org" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/composer.svg" alt="Composer Logo" class="w-10 h-10 mx-auto">
                        </a>
                        <a href="https://www.linux.org" target="_blank"
                            class="bg-gray-700 p-4 rounded shadow transition-all duration-300 hover:bg-gray-600 hover:shadow-lg hover:scale-105 text-center">
                            <img src="/img/linux.svg" alt="Linux Logo" class="w-10 h-10 mx-auto">
                        </a>
                    </div>
                </section>

                <!-- Sección de Work Experience -->
                <section id="work-experience" class="my-8">
                    <h2 class="text-2xl font-semibold text-gray-200 text-center mb-4">Experiencia profesional</h2>
                    <hr class="my-6 border-gray-700 w-1/2 mx-auto">
                    <div class="space-y-4" id="experience-list">
                        @foreach ($data['workExperience'] as $index => $experience)
                            @if ($index < 5)
                                <div class="bg-gray-700 p-4 rounded-lg transition-transform duration-300 transform cursor-pointer
                                    {{ $experience->end_date === null ? 'border-2 border-green-400 text-gray-200 hover:bg-gray-600 hover:text-white' : 'border-2 border-gray-500 text-gray-400 opacity-75 hover:bg-gray-600 hover:text-white' }}"
                                    onclick="showDescription({{ $experience->id }})">
                                    <div class="flex flex-col items-start">
                                        <h3 class="text-lg font-bold text-left">{{ $experience->position }}</h3>
                                        <p class="text-sm text-left">{{ $experience->company_name }}</p>
                                        <p class="text-sm text-left">
                                            {{ $experience->start_date->format('M Y') }} -
                                            {{ $experience->end_date ? $experience->end_date->format('M Y') : 'Presente' }}
                                        </p>
                                        <div class="text-sm text-gray-400 text-left">
                                            <?php
                                            $endDate = $experience->end_date ?? now(); // Usar la fecha actual si no hay end_date
                                            $diff = $experience->start_date->diff($endDate);
                                            $years = $diff->y;
                                            $months = $diff->m;
                                            
                                            // Mostrar años y meses, o solo meses si no hay años
                                            if ($years > 0) {
                                                echo $years . ' años ' . $months . ' meses';
                                            } else {
                                                echo $months . ' meses';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    @if (count($data['workExperience']) > 5)
                        <button id="show-more" class="mt-4 text-blue-500 hover:underline"
                            onclick="toggleExperience()">
                            Mostrar más
                        </button>
                    @endif
                </section>
            </main>
        </div>
    </div>

    <!-- Cuadro de diálogo para descripciones -->
    <div id="description-modal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center hidden"
        onclick="closeModal(event)">
        <div class="bg-gray-800 p-6 rounded-lg w-full max-w-lg mx-4 relative" onclick="event.stopPropagation()">
            <div class="flex justify-end mb-4">
                <button id="close-modal" class="text-red-500 hover:text-red-600" onclick="closeModal(event)">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <h3 id="modal-title" class="text-xl font-semibold text-gray-200 text-center mt-4 mb-4"></h3>
            <p id="modal-description" class="text-gray-400 text-justify p-4 mb-6"></p>
        </div>
    </div>

    <footer class="bg-gray-800 p-4 mt-auto">
        <div class="text-center text-gray-400">
            &copy; {{ date('Y') }} Hecho con ❤ por <span class="font-bold text-blue-500">colidom</span>. Todos los
            derechos reservados.
        </div>
    </footer>

    <script>
        let allExperiences = @json($data['workExperience']); // Traemos todas las experiencias
    </script>

    <script src="{{ asset('js/scripts.js') }}"></script>

</body>

</html>

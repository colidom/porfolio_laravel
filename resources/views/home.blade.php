<!-- resources/views/portfolio.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - {{ $data['name'] }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/heroicons@1.0.6/outline.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-gray-200 font-sans">
    <div class="min-h-screen flex justify-center p-8">
        <div class="w-full max-w-7xl flex">
            <!-- Panel izquierdo -->
            <aside class="w-1/4 bg-gray-800 p-6 shadow-md rounded-lg">
                <div class="text-center">
                    <!-- Foto de perfil -->
                    <div class="w-32 h-32 mx-auto rounded-full bg-gray-600 overflow-hidden">
                        <img src="/img/avatar.png" alt="Profile Photo" class="w-full h-full object-cover">
                    </div>
                    <p class="text-sm text-gray-400 mt-2">SysAdmin | Web Developer</p>

                </div>

                <!-- Botones de contacto -->
                <div class="mt-6 flex space-x-4">
                    <a href="mailto:colidom@outlook.com"
                        class="block text-center bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Email</a>
                </div>

                <!-- Sección de Skill Set -->
                <hr class="my-6 border-gray-700">
                <div>
                    <h3 class="text-xl font-semibold text-gray-300 mb-4">Skill Set</h3>
                    <ul class="list-disc list-inside text-gray-400">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                        <li>PHP</li>
                        <li>Laravel</li>
                    </ul>
                </div>
                <!-- Sección de Certificaciones -->
                <hr class="my-6 border-gray-700">
                <div>
                    <h3 class="text-xl font-semibold text-gray-300 mb-4">Certifications</h3>
                    <ul class="list-disc list-inside text-gray-400">
                        <li>Certified Laravel Developer</li>
                        <li>JavaScript Specialist</li>
                    </ul>
                </div>
                <!-- Sección de Educación -->
                <hr class="my-6 border-gray-700">
                <div>
                    <h3 class="text-xl font-semibold text-gray-300 mb-4">Education</h3>
                    <ul class="list-disc list-inside text-gray-400">
                        <li>Bachelor's Degree in Computer Science - XYZ University</li>
                        <li>Master's Degree in Software Engineering - ABC University</li>
                    </ul>
                </div>
            </aside>

            <!-- Panel central -->
            <main class="w-3/4 bg-gray-800 p-8 rounded-lg ml-4">
                <!-- Sección About Me -->
                <section class="py-8">
                    <h1 class="text-4xl font-bold text-gray-200 mb-4 text-center">Sobre mi</h1>
                    <hr class="my-6 border-gray-700 w-1/2 mx-auto">
                    <p class="text-gray-400 mb-6 text-lg leading-relaxed text-justify">
                        Soy Carlos Oliva, desarrollador de software y administrador de sistemas, apasionado por la
                        tecnología
                        y el aprendizaje constante. Creo que el tiempo es un recurso valioso y busco aprovecharlo al
                        máximo, explorando métodos que mejoren mi eficiencia.
                    </p>
                    <p class="text-gray-400 mb-6 text-lg leading-relaxed text-justify">
                        Disfruto de momentos con mis mascotas 🐶🦜, familia y amigos, así como de bailar salsa y bachata
                        💃🕺, viajar ✈️, hacer rutas en moto 🛵 y explorar la naturaleza 🏔. Me definen la empatía, la
                        solidaridad, la honestidad, el trabajo duro y la proactividad, que guían mi interacción con los
                        demás y mis responsabilidades.
                    </p>
                </section>


                <!-- Enlaces a redes sociales -->
                <section class="py-8">
                    <h2 class="text-2xl font-semibold text-gray-200">Social Links</h2>
                    <div class="flex space-x-4 mt-4">
                        <a href="https://www.linkedin.com/in/cjod/" target="_blank"
                            class="flex items-center text-blue-400 transition-transform duration-300 transform hover:scale-105 hover:bg-blue-900 p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M19.333 0h-14.666C2.835 0 0 2.835 0 6.667v10.666C0 21.165 2.835 24 6.667 24h14.666C21.165 24 24 21.165 24 17.333V6.667C24 2.835 21.165 0 17.333 0zM7.133 20.667H3.333V9h3.8v11.667zm-1.9-13.033c-1.22 0-2.2-.99-2.2-2.2 0-1.233.98-2.2 2.2-2.2 1.22 0 2.2.967 2.2 2.2 0 1.21-.98 2.2-2.2 2.2zM20.667 20.667h-3.8V14.8c0-1.37-.027-3.143-1.91-3.143-1.91 0-2.2 1.489-2.2 3.025v5.983h-3.8V9h3.8v1.6h.027c.527-.993 1.814-2.04 3.73-2.04 3.993 0 4.2 2.632 4.2 6.05v5.057h.027z" />
                            </svg>
                            LinkedIn
                        </a>
                        <a href="https://www.youtube.com/@colidom" target="_blank"
                            class="flex items-center text-red-400 transition-transform duration-300 transform hover:scale-105 hover:bg-red-900 p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M23.495 6.042a2.992 2.992 0 0 0-2.1-2.1C19.137 3.2 12 3.2 12 3.2S4.864 3.2 2.605 3.942A2.992 2.992 0 0 0 .505 6.042C0 7.494 0 12 0 12s0 4.506.505 5.958a2.992 2.992 0 0 0 2.1 2.1c2.358.742 9.395.742 9.395.742s7.136 0 9.395-.742a2.992 2.992 0 0 0 2.1-2.1C24 16.506 24 12 24 12s0-4.506-.505-5.958zM9.545 15.733V8.267l6.472 3.733-6.472 3.733z" />
                            </svg>
                            YouTube
                        </a>
                        <a href="https://github.com/colidom" target="_blank"
                            class="flex items-center text-gray-400 transition-transform duration-300 transform hover:scale-105 hover:bg-gray-700 p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 .296C5.373.296 0 5.668 0 12.303c0 5.334 3.438 9.84 8.205 11.43.6.111.82-.261.82-.578 0-.288-.011-1.25-.017-2.27-3.338.725-4.041-1.607-4.041-1.607-.546-1.386-1.333-1.756-1.333-1.756-1.086-.742.083-.726.083-.726 1.204.085 1.838 1.234 1.838 1.234 1.067 1.826 2.8 1.297 3.48.992.108-.773.418-1.297.76-1.592-2.665-.303-5.466-1.332-5.466-5.928 0-1.31.469-2.383 1.239-3.22-.124-.303-.537-1.53.115-3.188 0 0 1.007-.322 3.302 1.227.958-.267 1.988-.4 3.005-.405 1.017.005 2.048.138 3.005.405 2.295-1.55 3.302-1.227 3.302-1.227.652 1.658.24 2.885.116 3.188.77.837 1.239 1.91 1.239 3.22 0 4.611-2.807 5.617-5.478 5.913.43.374.815 1.113.815 2.241 0 1.618-.015 2.924-.015 3.317 0 .319.218.696.825.578C20.565 22.142 24 17.633 24 12.303 24 5.668 18.627.296 12 .296z" />
                            </svg>
                            GitHub
                        </a>
                    </div>
                </section>

                <!-- Sección de Lenguajes y herramientas -->
                <section class="py-8">
                    <h2 class="text-2xl font-semibold text-gray-200">Lenguajes y herramientas</h2>
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
                    <h2 class="text-2xl font-semibold text-gray-200 mb-4">Experiencia laboral</h2>
                    <div class="space-y-4">
                        <div class="bg-gray-700 p-4 rounded-lg cursor-pointer transition-transform duration-300 transform hover:scale-105 hover:bg-gray-700"
                            onclick="showDescription('job1')">
                            <h3 class="text-lg font-semibold">Desarrollador Web en Company A</h3>
                            <p class="text-gray-400">Enero 2021 - Presente</p>
                        </div>
                        <div class="bg-gray-700 p-4 rounded-lg cursor-pointer transition-transform duration-300 transform hover:scale-105 hover:bg-gray-700"
                            onclick="showDescription('job2')">
                            <h3 class="text-lg font-semibold">Desarrollador Backend en Company B</h3>
                            <p class="text-gray-400">Marzo 2020 - Diciembre 2020</p>
                        </div>
                        <div class="bg-gray-700 p-4 rounded-lg cursor-pointer transition-transform duration-300 transform hover:scale-105 hover:bg-gray-700"
                            onclick="showDescription('job3')">
                            <h3 class="text-lg font-semibold">Practicante en Company C</h3>
                            <p class="text-gray-400">Julio 2019 - Febrero 2020</p>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <!-- Cuadro de diálogo para descripciones -->
    <div id="description-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-gray-800 p-6 rounded-lg w-1/3">
            <h3 id="modal-title" class="text-xl font-semibold text-gray-200"></h3>
            <p id="modal-description" class="text-gray-400 mt-2"></p>
            <button id="close-modal"
                class="mt-4 bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Cerrar</button>
        </div>
    </div>

    <!-- Modal de descripción -->
    <div id="description-modal" class="hidden">
        <h2 id="modal-title"></h2>
        <p id="modal-description"></p>
        <button id="close-modal">Cerrar</button>
    </div>

    <script>
        const descriptions = @json($data['workExperience']);

        function showDescription(jobId) {
            const modal = document.getElementById("description-modal");
            const titleElement = document.getElementById("modal-title");
            const descriptionElement = document.getElementById("modal-description");

            const job = descriptions.find(job => job.id === jobId);

            if (job) {
                titleElement.textContent = job.title;
                descriptionElement.textContent = job.description;

                modal.classList.remove("hidden");
            }
        }

        document.getElementById("close-modal").onclick = function() {
            document.getElementById("description-modal").classList.add("hidden");
        };
    </script>

</body>

</html>

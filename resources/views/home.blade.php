<!-- resources/views/portfolio.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - {{ $data['name'] }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">
    <header class="bg-amber-300 shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-6">
            <h1 class="text-4xl font-bold text-gray-800">{{ $data['name'] }}</h1>
            <p class="text-gray-700 mt-2">{{ $data['bio'] }}</p>
        </div>
    </header>

    <main class="max-w-6xl mx-auto p-6 mt-8 bg-gray-100 rounded-lg shadow-lg">
        <section class="mt-8">
            <h2 class="text-3xl font-semibold text-gray-800">Skills</h2>
            <div class="mt-4 flex flex-wrap">
                @foreach ($data['skills'] as $skill)
                    <span class="bg-amber-200 text-gray-800 px-4 py-2 rounded-full text-sm font-semibold mr-2 mb-2">
                        {{ $skill }}
                    </span>
                @endforeach
            </div>
        </section>

        <section class="mt-8">
            <h2 class="text-3xl text-center font-semibold text-gray-800">Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                @foreach ($data['projects'] as $project)
                    <div class="bg-amber-50 p-4 rounded-lg shadow hover:bg-amber-100 transition duration-200">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $project['title'] }}</h3>
                        <p class="text-gray-600">{{ $project['description'] }}</p>
                        <a href="{{ $project['link'] }}" class="text-amber-600 hover:text-amber-800 mt-2 inline-block"
                            target="_blank">Ver proyecto</a>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    <footer class="bg-amber-300 mt-10 shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-6 text-center text-gray-700">
            <p>&copy; {{ date('Y') }} {{ $data['name'] }}. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>

</html>

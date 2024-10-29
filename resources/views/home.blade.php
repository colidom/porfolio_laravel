<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
        <h1 class="text-3xl font-bold text-gray-800">{{ $data['name'] }}</h1>
        <p class="mt-4 text-gray-600">{{ $data['bio'] }}</p>

        <div class="mt-8">
            <h2 class="text-2xl font-semibold text-gray-700">Skills</h2>
            <ul class="mt-4">
                @foreach ($data['skills'] as $skill)
                    <li
                        class="inline-block bg-blue-200 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold mr-2">
                        {{ $skill }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-semibold text-gray-700">Projects</h2>
            <ul class="mt-4 space-y-4">
                @foreach ($data['projects'] as $project)
                    <li class="bg-gray-100 p-4 rounded-lg shadow">
                        <strong class="text-lg text-gray-800">{{ $project['title'] }}:</strong>
                        <p class="text-gray-600">{{ $project['description'] }}</p>
                        <a href="{{ $project['link'] }}" class="text-blue-500 hover:text-blue-700" target="_blank">Ver
                            proyecto</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>

</html>

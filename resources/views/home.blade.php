<!-- resources/views/portfolio.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        .skills,
        .projects {
            margin-top: 20px;
        }

        .skills li,
        .projects li {
            list-style: none;
            padding: 5px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ $data['name'] }}</h1>
        <p>{{ $data['bio'] }}</p>

        <h2>Skills</h2>
        <ul class="skills">
            @foreach ($data['skills'] as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>

        <h2>Projects</h2>
        <ul class="projects">
            @foreach ($data['projects'] as $project)
                <li>
                    <strong>{{ $project['title'] }}:</strong>
                    <p>{{ $project['description'] }}</p>
                    <a href="{{ $project['link'] }}" target="_blank">Ver proyecto</a>
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>

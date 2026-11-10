<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

    @include('partials.navbar')

    <h1>Welcome to My Portfolio</h1>

    <section>
        <h2>About Me</h2>

        <p>{{ $about?->about_me ?? 'No information yet.' }}</p>
    </section>

    <section>
        <h2>My Skills</h2>

        @foreach ($skills as $skill)
            <div>
                <h3>{{ $skill->name }}</h3>
                <p>Level: {{ $skill->level }}</p>
            </div>
        @endforeach
    </section>

    <section>
        <h2>My Projects</h2>

        @foreach ($projects as $project)
            <div>
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>
            </div>
        @endforeach
    </section>

</body>
</html>
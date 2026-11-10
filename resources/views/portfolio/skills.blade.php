<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Skills</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body>

    @include('partials.navbar')

    <h1>My Skills</h1>

    <ul>
        @foreach ($skills as $skill)
        <li>
            <h3>{{ $skill->name }}</h3>
            <p>Level: {{ $skill->level }}</p>
        </li>
        @endforeach
    </ul>

</body>

</html>
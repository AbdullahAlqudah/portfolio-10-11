<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body>
    @include('partials.navbar')
    <h1>About Me</h1>

<h1>About Me</h1>

@foreach ($about as $about)
    <p>{{ $about->about_me }}</p>
@endforeach
    
</body>

</html>
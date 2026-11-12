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

    @if($user)
    <h2>{{ $user->name }}</h2>

    @if($user->profile)
    <p>{{ $user->profile->bio }}</p>
    <p>Phone: {{ $user->profile->phone }}</p>
    <p>Location: {{ $user->profile->location }}</p>
    @endif
    @endif

    @foreach ($about as $item)
    <p>{{ $item->about_me }}</p>
    @endforeach
    @auth
    <a href="{{ route('profile.edit') }}" class="btn btn-primary">
        Edit Profile
    </a>
    @endauth
</body>

</html>
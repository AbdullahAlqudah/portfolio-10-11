
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

    @include('partials.navbar')

    <h1>Edit Profile</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text"
                   class="form-control"
                   id="name"
                   name="name"
                   value="{{ old('name', $user->name) }}"
                   required>
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea class="form-control"
                      id="bio"
                      name="bio"
                      rows="4">{{ old('bio', $profile?->bio) }}</textarea>
            @error('bio')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text"
                   class="form-control"
                   id="phone"
                   name="phone"
                   value="{{ old('phone', $profile?->phone) }}">
            @error('phone')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text"
                   class="form-control"
                   id="location"
                   name="location"
                   value="{{ old('location', $profile?->location) }}">
            @error('location')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            Save Changes
        </button>
    </form>

</body>
</html>

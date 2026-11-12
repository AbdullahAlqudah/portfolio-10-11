
<form method="POST" action="{{ route('portfolio.store') }}">
    @csrf

    <div class="form-group">
        <label for="title">Project Title</label>
        <input type="text"
               class="form-control"
               id="title"
               name="title"
               value="{{ old('title') }}"
               required>
    </div>

    <div class="form-group">
        <label for="description">Project Description</label>
        <textarea class="form-control"
                  id="description"
                  name="description"
                  rows="3"
                  required>{{ old('description') }}</textarea>
    </div>

    <div class="form-group">
        <label>Project Skills</label>

        @foreach ($skills as $skill)
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="skills[]"
                    id="skill-{{ $skill->id }}"
                    value="{{ $skill->id }}"
                    @checked(in_array($skill->id, old('skills', [])))
                >

                <label class="form-check-label"
                       for="skill-{{ $skill->id }}">
                    {{ $skill->name }}
                </label>
            </div>
        @endforeach

        @error('skills')
            <p>{{ $message }}</p>
        @enderror

        @error('skills.*')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">
        Submit
    </button>
</form>

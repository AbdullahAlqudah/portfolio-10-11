<form method="POST" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Project Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group">
        <label for="description">Project Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@extends('layout.dashboard')

@section('main_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
    <form action="{{ route('art.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="ARTCODE" class="form-label">Art Code:</label>
          <input type="text" class="form-control " name="ARTCODE">
        </div>
        <div class="mb-3">
          <label for="ARTNAME" class="form-label">Art Name:</label>
          <input type="text" class="form-control" name="ARTNAME">
        </div>
        <div class="mb-3">
          <label for="ARTISTCODE" class="form-label">Artist Code:</label>
          <input type="text" class="form-control" name="ARTISTCODE">
        </div>
        <div class="mb-3">
          <label for="ARTTYPE" class="form-label">Art Type:</label>
          <select class="form-select" name="ARTTYPE">
              <option selected>Select Type</option>
              <option value="3D">3D</option>
              <option value="2D">2D</option>
              <option value="Pixel Art">Pixel Art</option>

          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Put your Art</label>
          <input class="form-control" type="file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
      
        </form>
</div>

@endsection
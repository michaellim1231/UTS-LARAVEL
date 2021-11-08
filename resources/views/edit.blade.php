@extends('layout.dashboard')

@section('main_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
    <form action="{{ route('art.update', $arts->id) }}" method="post"  enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="mb-3">
          <label for="ARTCODE" class="form-label">Art Code:</label>
          <input type="text" class="form-control" name="ARTCODE" value="{{ $arts->ARTCODE }}">
        </div>
        <div class="mb-3">
          <label for="ARTNAME" class="form-label">Art Name:</label>
          <input type="text" class="form-control" name="ARTNAME" value="{{ $arts->ARTNAME }}">
        </div>
        <div class="mb-3">
          <label for="ARTISTCODE" class="form-label">Artist Code:</label>
          <input type="text" class="form-control" name="ARTISTCODE">
        </div>
        <div class="mb-3">
          <label for="ARTTYPE" class="form-label">Art Type:</label>
          <select class="form-select" name="ARTTYPE" >
              <option selected>Select-Type</option>
              <option value="3D">3D</option>
              <option value="2D">2D</option>
              <option value="Pixel Art">Pixel Art</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
      
    </form>
</div>

@endsection
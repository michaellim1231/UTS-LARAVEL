@extends('layout.dashboard')

@section('main_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
  <form action="{{ route('artist.update', $artists->ARTCODE) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PATCH">

    <div class="mb-3">
      <label for="ARTCODE" class="form-label">Art Code:</label>
      <input type="text" class="form-control " name="ARTCODE" value="{{ $artists->ARTCODE }}">
    </div>
    <div class="mb-3">
      <label for="ARTISTNAME" class="form-label">Artist Name:</label>
      <input type="text" class="form-control" name="ARTISTNAME" value="{{ $artists->ARTISTNAME }}">
    </div>
    <div class="mb-3">
      <label for="NOTELP" class="form-label">No-telp:</label>
      <input type="text" class="form-control" name="NOTELP" value="{{ $artists->NOTELP }}">
    </div>
    <div class="mb-3">
      <label for="ADDRESS" class="form-label">Address:</label>
      <input type="text" class="form-control" name="ADDRESS" value="{{ $artists->ADDRESS }}">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
  
    </form>
</div>

@endsection
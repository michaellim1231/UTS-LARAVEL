@extends('layout.dashboard')

@section('title', "Artist")

@section('main_content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Artist</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success " role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive ">
    <a href="{{ route('artist.create') }}"class="btn btn-primary mb-3 px-3">Create new post</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">CODE-ART</th>
            <th scope="col">ARTIST-NAME</th>
            <th scope="col">PHONE-NUMBER</th>
            <th scope="col">ADDRESS</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($artists as $artist)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $artist['ARTCODE'] }}</td>
              <td>{{ $artist['ARTISTNAME'] }}</td>
              <td>{{ $artist['NOTELP'] }}</td>
              <td>{{ $artist['ADDRESS'] }}</td>
              <td>
                  <a href="{{ route('artist.show', $artist->ARTCODE) }}" class="badge bg-info"><span data-feather="eye"></span></a>
                  <a href="{{ route('artist.edit', $artist->ARTCODE) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
  
                  <form action="{{ route('artist.destroy', $artist->ARTCODE) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></button>
                </form>
                  
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

@endsection

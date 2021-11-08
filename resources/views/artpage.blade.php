@extends('layout.dashboard')

@section('title', "Art")

@section('main_content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Art</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success " role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive ">
  <a href="{{ route('art.create') }}"class="btn btn-primary mb-3 px-3">Create new post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">NO</th>
          <th scope="col">ART-CODE</th>
          <th scope="col">ART-NAME</th>
          <th scope="col">ART-TYPE</th>
          <th scope="col">ARTIST</th>
          <th scope="col">ACTION</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($arts as $art)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $art['ARTCODE'] }}</td>
            <td>{{ $art['ARTNAME'] }}</td>
            <td>{{ $art['ARTTYPE'] }}</td>
            <td>{{ $art->artist->ARTISTNAME }}</td>
            <td>
                <a href="{{ route('art.show', $art->id) }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="{{ route('art.edit', $art->id) }}" class="badge bg-warning"><span data-feather="edit"></span></a>

                <form action="{{ route('art.destroy', $art->id) }}" method="POST" class="d-inline">
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

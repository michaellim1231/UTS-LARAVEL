@extends('layout.dashboard')

@section('title', "Art")

@section('main_content')

<div class = 'mt-2 p-3'>
    <h1>Artist Name: {{ $artists->ARTISTNAME}}</h1>
    <h1>Artist Code: {{ $artists->ARTCODE}}</h1>

    @foreach ($artists->art as $artist)  
   
        <img src="{{ asset('storage/'. $artist->image) }}" class="img-thumbnail" width="300px" height="300px">
    
    @endforeach

</div>
<a href="/artist" class="btn btn-success"><span data-feather="arrow-left"></span>Back to previous page</a>

@endsection

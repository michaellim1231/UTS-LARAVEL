@extends('layout.dashboard')

@section('title', "Art")

@section('main_content')

<div class = 'mt-2 p-3'>
    <h1>Art Name: {{ $arts->ARTNAME}}</h1>
    <h1>Art Type:{{ $arts->ARTTYPE}}</h1>
    @if ($arts->image)
        <img src="{{ asset('storage/'. $arts->image) }}" class="img-thumbnail" width="300px" height="300px">
    @endif
    
</div>
<a href="/art" class="btn btn-success"><span data-feather="arrow-left"></span>Back to previous page</a>

@endsection

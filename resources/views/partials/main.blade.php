@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')
<h1>
    movies
</h1>

<h2>
  @foreach ($movies as $movie)

      
  @endforeach
</h2>
@endsection
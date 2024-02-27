@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')
<h1>
    movies
</h1>

<h2>
  <div class="row">
      @foreach ($movies as $index => $movie)
          <div class="container">
              <div class="card">

                  <div class="card-body">

                      <h3>
                          {{ $movie->title }}
                      </h3>

                      <a href="{{ route('movies.show', ['id' => $movie->id]) }}" class="btn btn-primary">
                        Vai al film
                      </a>

                      
                  </div>
              </div>
          </div>
      @endforeach
  </div>
</h2>
@endsection

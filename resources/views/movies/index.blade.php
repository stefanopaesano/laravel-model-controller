@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')
<h1>
    movies
</h1>

<h2>
  <div class="row">
      @foreach ($movies as $index => $movie)
          <div class="col-12 col-sm-3">
              <div class="card">
                  <div class="card-body">
                      <h3>
                          {{ $movie->title }}
                      </h3>

                      
                  </div>
              </div>
          </div>
      @endforeach
  </div>
</h2>
@endsection

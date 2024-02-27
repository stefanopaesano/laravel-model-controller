@extends('layouts.app')

@section('page-title', 'home')

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

                      <ul>
                        
                        <li>
                          {{ $movie->title }}
                        </li>  
  
                        <li>
                          {{ $movie->original_title }}
                        </li>
                          
  
                        <li>
                          {{ $movie->date }}
                        </li>
                          
                        <li>
                          {{ $movie->nationality }}
                        </li>

                      </ul>
                      
                        

                     
                        
                      

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

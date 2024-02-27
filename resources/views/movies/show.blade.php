@extends('layouts.app')

@section('page-title', 'movie')

@section('main-content')
<h1>
    Laravel Start 1
</h1>

<h2>
    <div class="row">
        <div class="col-12">
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

                    
                </div>
            </div>
        </div>
    </div>
</h2>
@endsection
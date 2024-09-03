@extends('layout/app')
@section('title') Movie details @endsection
@section('content')

    <div class="card mt-4">
        <div class="card-header">
            Movie details
        </div>
        <div class="card-body">
            <h5 class="card-title">movie_name: {{$movie->movie_name}}</h5>
            <h5 class="card-text">movie_description: {{$movie->movie_description}}</h5>
            <h5 class="card-text">movie_gener: {{$movie->movie_gener}}</h5>
        </div>

    </div>

    
  
    @endsection

@extends('layout/app')
@section('title') Update Movie @endsection
@section('content')

<form method="POST" action="{{route('movies.update',$movie->id)}}">
@csrf
@method('PUT')  
<div class="mb-3">
        <label class="form-label">movie_name</label>
        <input name="movie_name" type="text" class="form-control" value="{{$movie->movie_name}}">
    </div>

    <div class="mb-3">
        <label class="form-label">movie_description</label>
        <textarea name="movie_description" class="form-control" rows="3"> {{$movie->movie_description}}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">movie_gener</label>
        <input name="movie_gener" type="text" class="form-control" value="{{$movie->movie_gener}}">

    </div>

    <button class="btn btn-primary">Update</button>
</form>
@endsection
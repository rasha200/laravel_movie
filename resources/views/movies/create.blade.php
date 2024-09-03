@extends('layout/app')
@section('title') Add Movie @endsection
@section('content')

<form method="POST" action="{{route('movies.store')}}">
@csrf  
<div class="mb-3">
        <label class="form-label">movie_name</label>
        <input name="movie_name" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">movie_description</label>
        <textarea name="movie_description" class="form-control" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">movie_gener</label>
        <input name="movie_gener" type="text" class="form-control">
    </div>

    <button class="btn btn-success">Save</button>
</form>
@endsection
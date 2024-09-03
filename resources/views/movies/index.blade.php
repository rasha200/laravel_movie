@extends('layout.app')

@section('title')All Movies @endsection
@section('content')
<div class="mt-4">
  <div class="text-center">
     <a href="{{route('movies.create')}}" class="btn btn-success"> Add Movie</a>
  </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id </th>
      <th scope="col">movie_name </th>
      <th scope="col">movie_description</th>
      <th scope="col">movie_gener </th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
 
    @foreach ($movies as $movie)
   <tr>
      <th scope="row">{{$movie->id}}</th>
      <td>{{$movie->movie_name}}</td>
      <td>{{$movie->movie_description}}</td>
      <td>{{$movie->movie_gener}}</td>
      <td>
        <a href="{{route('movies.show',$movie->id)}}" class="btn btn-info">View</a>
        <a href="{{route('movies.edit',$movie->id)}}" class="btn btn-primary">Update</a>
        <form method="POST" action="{{route('movies.destroy',$movie->id)}}" style="display:inline;">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Delete</button>

        </form>
      </td>
    </tr>

    
    @endforeach
    
    
  </tbody>
</table>
</div>
@endsection

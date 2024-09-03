<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;


class MovieController extends Controller
{
  public function index()
  {
    $allmovies = Movie::all();
    //  dd($allmovies);


    return view('movies.index', ['movies' => $allmovies]);

  }

  public function show(Movie $movie)
  {
    // $singlemovie = Movie::find($movieId) ;
    // $singlemovie = Movie::where('id', $movieId)->get();
    // $singlemovie = Movie::where('id', $movieId)->first();
    // dd($singlemovie);
    return view('movies.show', ['movie' => $movie]);
  }

  public function create()
  {

    return view('movies.create');

  }

  public function store(Request $request)
  {
    //  $data=request();
    //  dd($data->title, $data->all());
    // $data=request()->all();
    // dd($data);
    // $movie_name = request()->movie_name;
    // $Description = request()->Description;
    // $movie_gener = request()->movie_gener;
    // dd($data, $movie_name, $Description,  $movie_gener);

    // $movies = new Movie;
    // $movies->movie_name =$request->input('movie_name');
    // $movies->movie_description =$request->input('movie_description');
    // $movies->movie_gener =$request->input('movie_gener');
    // $movies->save();

    Movie::create([
      'movie_name' => $request->input('movie_name'),
      'movie_description' => $request->input('movie_description'),
      'movie_gener' => $request->input('movie_gener'),
    ]);
    return to_route('movies.index');
  }


  public function edit(Movie $movie)
  {
    //  dd($movie);
    return view('movies.edit', ['movie' => $movie]);
  }

  public function update(Request $request, Movie $movie)
  {
    //   $data=request()->all();

    // $movie_name = request()->movie_name;
    // $Description = request()->Description;
    // $movie_gener = request()->movie_gener;
// dd($data, $movie_name, $Description,  $movie_gener);
//  $singlemovie = Movie::find($movie) ;
//  dd($movie);
//  dd($singlemovie);
// dd($request->all());
$movie->update([
      'movie_name' => $request->input('movie_name'),
      'movie_description' => $request->input('movie_description'),
      'movie_gener' => $request->input('movie_gener'),
    ]);

    return to_route('movies.show', ['movie' => $movie]);

  }

  public function destroy(Movie $movie)
  {
    // dd($movie);
    $movie->delete();
    return to_route('movies.index');
  }
}

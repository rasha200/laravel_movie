<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {//callback function
    return view('welcome');
});

Route::get('/movies',[MovieController::class , 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MovieController::class , 'show'])->name('movies.show');
Route::get('/movie/create',[MovieController::class, 'create'])->name('movies.create');
Route::post('/movies', [MovieController::class , 'store'])->name('movies.store');
Route::get('movies/{movie}/edit', [MovieController::class , 'edit'])->name('movies.edit');
Route::put('/movies/{movie}', [MovieController::class , 'update'])->name('movies.update');
Route::delete('/movies/{movie}',[MovieController::class , 'destroy'])->name('movies.destroy');

// Route::resource('movie', [MovieController::class]);


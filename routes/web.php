<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$navbar = config('navbar-array');
$data = [
    'navbar' => $navbar
];

Route::get('/', function () use ($data) {
    $data = array_merge(['comics' => config("comics")]);  
    return view('home', $data);
})->name('comics');

Route::get('/comics', function () use ($data) {
    $data = array_merge(['comics' => config("comics")]);  
    return view('home', $data);
})->name('comics');

Route::get('/comics/single-comic/{id}', function($id) {
    $data = config('comics');
    $comic = $data[$id];
    return view('single-comic', compact("comic"));
})->name('single-comic');

// copio le stesse info, giusto per avere un riempitivo delle pagine non usate in questo esercizio
Route::get('/characters', function() use($data) {
    $data = array_merge(['comics' => config("comics")]);  
    return view('home', $data);
})->name('characters');
Route::get('/movies', function () use ($data) {
    $data = array_merge(['comics' => config("comics")]);  
    return view('home', $data);
})->name('movies');
Route::get('/tv', function () use ($data) {
    $data = array_merge(['comics' => config("comics")]);  
    return view('home', $data);
})->name('tv');
Route::get('/games', function () use ($data) {
    $data = array_merge(['comics' => config("comics")]);  
    return view('home', $data);
})->name('games');
Route::get('/videos', function () use ($data) {
    $data = array_merge(['comics' => config("comics")]);  
    return view('home', $data);
})->name('videos');
Route::get('/fans', function () use ($data) {
    $data = array_merge(['comics' => config("comics")]);  
    return view('home', $data);
})->name('fans');
Route::get('/news', function () use ($data) {
    $data = array_merge(['comics' => config("comics")]);  
    return view('home', $data);
})->name('news');
Route::get('/shop', function () use ($data) {
    $data = array_merge(['comics' => config("comics")]);  
    return view('home', $data);
})->name('shop');
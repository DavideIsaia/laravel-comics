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

Route::get('/', function () {
    $data = config("comics");  
    return view('home', compact("data"));
})->name('comics');

Route::get('/comics', function () {
    $data = config("comics");  
    return view('home', compact("data"));
})->name('comics');

Route::get('/comics/single-comic/{id}', function($id) {
    $data = config('comics');
    $comic = $data[$id];
    return view('single-comic', compact("comic"));
})->name('single-comic');

Route::get('/characters')->name('characters');
Route::get('/movies')->name('movies');
Route::get('/tv')->name('tv');
Route::get('/games')->name('games');
Route::get('/videos')->name('videos');
Route::get('/fans')->name('fans');
Route::get('/news')->name('news');
Route::get('/shop')->name('shop');
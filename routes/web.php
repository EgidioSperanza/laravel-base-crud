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


Route::get('/', 'CharacterController@index')->name('characters');

Route::get('/comics', 'ComicController@index')->name('comics');

Route::get('/movies', 'MovieController@index')->name('movies');

Route::get('/tv', 'TvController@index')->name('tv');

Route::get('/games', 'GameController@index')->name('games');

Route::get('/collectibles', 'CollectibleController@index')->name('collectibles');

Route::get('/videos', 'VideoController@index')->name('videos');

Route::get('/fans', 'FanController@index')->name('fans');

Route::get('/news', 'NewsController@index')->name('news');

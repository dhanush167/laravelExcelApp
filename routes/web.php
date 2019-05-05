<?php

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
    return view('welcome');
});

Route::get('/', 'BookController@addFile')->name('add');
Route::post('/import', 'BookController@import')->name('import');
Route::get('/books', 'BookController@showBook')->name('books');
Route::get('/authors', 'BookController@showAuthor')->name('authors');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/export/{type}', 'BookController@export')->name('export');
Route::get('/home', 'HomeController@index')->name('home');



















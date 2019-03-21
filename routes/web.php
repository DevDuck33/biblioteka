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

Route::get('/', 'PageController@home');

Route::get('/search', 'PageController@search')->name('page.search');

Auth::routes();

Route::middleware(['auth'])->group(function () {
  // AuthorController

  Route::get('/author/create', 'AuthorController@create')->name('author.create');

  Route::post('/author', 'AuthorController@store')->name('author.store');

  // TypeController

  Route::get('/type/create', 'TypeController@create')->name('type.create');

  Route::post('/type', 'TypeController@store')->name('type.store');

  // BookController

  Route::get('/book/create', 'BookController@create')->name('book.create');

  Route::post('/book', 'BookController@store')->name('book.store');

  Route::delete('/book/{id}', 'BookController@destroy')->name('book.destroy');

  Route::get('/book/{id}/edit', 'BookController@edit')->name('book.edit');

  Route::patch('/book/{id}', 'BookController@update')->name('book.update');

});

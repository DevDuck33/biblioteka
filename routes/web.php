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

Auth::routes();

Route::get('/home', 'PageController@userPanel')->middleware('auth')->name('home');

// AuthorController

Route::get('/author/create', 'AuthorController@create')->name('author.create')->middleware('auth');

Route::post('/author', 'AuthorController@store')->name('author.store')->middleware('auth');

// TypeController

Route::get('/type/create', 'TypeController@create')->name('type.create')->middleware('auth');

Route::post('/type', 'TypeController@store')->name('type.store')->middleware('auth');

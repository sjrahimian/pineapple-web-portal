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

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::resource('item', 'ItemController');

Route::get('/search', 'SearchController@search')->name('search');


Route::get('/', function () {
    return view('welcome');
})->name('docs');

Route::get('/documents', function () {
    return view('welcome');
})->name('maps');

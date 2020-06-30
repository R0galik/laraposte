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
    return view('welcome');
});
Route::get('/paste', 'PasteController@index')->name('paste.list');
Route::get('/paste/create', 'PasteController@createView')->name('paste.createView');
Route::post('/paste/create', 'PasteController@create')->name('paste.create');
Route::get('paste/{paste}', 'PasteController@show')->name('paste.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Auth::routes();

Route::get('colors', 'MainController@colors')->name('colors');
Route::get('typography', 'MainController@typography')->name('typography');
Route::get('container', 'MainController@container')->name('container');
Route::get('grid', 'MainController@grid')->name('grid');

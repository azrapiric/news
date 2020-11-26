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

Route::get('kreiraj-vijest','NewsController@create')->name('kreiraj-vijesti');
Route::post('snimi-vijest','NewsController@store')->name('snimi-vijest');
Route::get('index','NewsController@index')->name('index');
Route::get('show/{id}','NewsController@show')->name('show');
Route::get('pdf','NewsController@generatePDF')->name('pdf');
Route::get('email','NewsController@sendEmail')->name('email');
Route::get('home','NewsController@home')->name('home');
Route::post('search','NewsController@search')->name('search');

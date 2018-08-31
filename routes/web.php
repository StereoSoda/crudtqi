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

Route::get('/', 'TestController@welcome');



Route::get('/eliminar', function () {
    return view('eliminar');
});

Route::get('/actualizar', function () {
    return view('actualizar');
});

Route::get('/hola/{nom}', function ($nom) {
    return "hola : {$nom}";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

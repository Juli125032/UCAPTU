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
    return view('index');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/alianzas', function () {
    return view('alianzas');
});

Route::get('/investigadores', function () {
    return view('investigadores');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

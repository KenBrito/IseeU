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


Route::get('/login', function () {
    return view('login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/cadastrar', function () {
    return view('registro');
});

Route::get('/doacao1', function () {
    return view('doacao1');
});

Route::get('/doacao2', function () {
    return view('doacao2');
});

Route::get('/doacao3', function () {
    return view('doacao3');
});

Route::get('/doadores', function () {
    return view('doadores');
});

Route::get('/noticias', function () {
    return view('noticias');
});

Route::get('/waves', function () {
    return view('waves');
});

Route::post('/loginme','loginController@login');


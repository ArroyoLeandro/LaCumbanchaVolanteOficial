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


Route::get('aboutUs', function () {
    return view('users.nosotros');
});


Route::get('gallery', function () {
    return view('users.galeria');
});

Route::get('contact', function () {
    return view('users.contacto');
});
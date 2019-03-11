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


Route::post('/actualizardatosBiografia', 'DatosbiografiaController@actualizardatosBiografia')->name('actualizardatosBiografia');

Route::get('/contactoM', 'DatosbiografiaController@index')->name('contactoM');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

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


// Route::get('/', function () {
//     return view('index');
// });











//------------------RUTAS GENERALES -----------------------------//

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'PfechasController@ActualizarIndex')->name('ActualizarIndex');

//Route::get('/home', 'HomeController@index')->name('home');


//------------------RUTAS BIOGRAFIA -----------------------------//

Route::post('/actualizardatosBiografia', 'DatosbiografiaController@actualizardatosBiografia')->name('actualizardatosBiografia');
Route::get('/aboutUs', 'DatosbiografiaController@into')->name('aboutUs');
Route::post('/ActualizarDesCorta', 'DatosbiografiaController@ActualizarDesCorta')->name('ActualizarDesCorta');

//Route::get('/', 'DatosbiografiaController@obtenerDescCorta')->name('obtenerDescCorta');

//------------------RUTAS FECHAS -----------------------------//

Route::post('/NuevaFecha', 'PfechasController@NuevaFecha')->name('NuevaFecha');

Route::post('/ActualizarFechas', 'PfechasController@ActualizarFechas')->name('ActualizarFechas');

Route::post('/BorrarFecha', 'PfechasController@BorrarFecha')->name('BorrarFecha');


//------------------RUTAS ALBUM -----------------------------//

//Route::get('/', 'UltimoAlbumController@obtenerAlbum')->name('obtenerAlbum');

Route::post('/ActualizarAlbum', 'UltimoAlbumController@ActualizarAlbum')->name('ActualizarAlbum');

//------------------RUTAS GALERIA -----------------------------//

Route::get('gallery', function () {
    return view('users.galeria');
});


//------------------RUTAS CONTACTO -----------------------------//

Route::get('contact', function () {
    return view('users.contacto');
});


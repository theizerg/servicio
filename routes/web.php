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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/correo', 'CorreoController@index')->name('correo');

Auth::routes();

Route::middleware(['auth',])->group(function () {

    Route::get('/', 'InicioController@index')->name('home');
    Route::get('user-autocomplete', 'UserController@autocomplete');
    Route::resource('user', 'UserController');
    Route::resource('logins', 'LoginController');
    Route::resource('permissions', 'PermissionController');

    Route::resource('reina', 'DiosReinaController');
    Route::get('reina/{id}/imprimir', 'DiosReinaController@imprimir');

    Route::resource('comandante', 'ComandanteController');
    Route::get('comandante/{id}/imprimir', 'ComandanteController@imprimir');

    Route::resource('maria', 'MariaController');
    Route::get('maria/{id}/imprimir', 'MariaController@imprimir');

});

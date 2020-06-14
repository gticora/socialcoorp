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

/*la rutas devuelve un objeto por ende se permite utilizar como un obtejo*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', 'UserController@index'); #se apunta la ruta al controlador correspondiente llamando el metodo

#vista mostrar usuarios
Route::get('/usuarios/{id}','UserController@show')->where('id', '[0-9]+');#se apunta la ruta al controlador correspondiente llamando el metodo


#Vista crear usuarios
Route::get('/usuarios/nuevo','UserController@create');#se apunta la ruta al controlador correspondiente llamando el metodo

#Vista index
Route::get('/saludo/{name}/{nickname?}','WelcomeUserController');#se apunta la ruta al controlador correspondiente llamando el metodo
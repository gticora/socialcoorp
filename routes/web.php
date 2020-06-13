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


Route::get('/usuarios', function () {
    return 'usuarios';
});
#la rutas devuelve un objeto por ende se permite utilizar como un obtejo

#vista mostrar usuarios
Route::get('/usuarios/{id}', function ($id) {
    return "Mostrando detalle usuario: {$id}";
})->where('id', '[0-9]+');

#Vista crear usuarios
Route::get('/usuarios/nuevo', function () {
    return "Crear usuario";
});

Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
	if($nickname){
		return "Bienvenido {$name}, tu apodo es {$nickname}";
	}else{
		return "Bienvenido {$name}, no tienes apodo";
	}
    
});
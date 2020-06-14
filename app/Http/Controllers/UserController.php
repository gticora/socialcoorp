<?php

namespace App\Http\Controllers; # Apellido de una clase Por decir una ruta

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Metodo

	#metodo que muestra a los usuarios
    public function index()
    {
    	return 'usuarios';
    }

    #metodo que muestra el detalle de los usuarios
    public function show($id)
    {
    	 return "Mostrando detalle usuario: {$id}";
    }

    #metodo que crea un usuario
    public function create()
    {
    	  return "Crear usuario";
    }



}

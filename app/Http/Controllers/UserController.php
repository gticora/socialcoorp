<?php

namespace App\Http\Controllers; # Apellido de una clase Por decir una ruta

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    //Metodos
	#metodo que muestra a los usuarios
    public function index()
    {

        if (request()->has('empty')) {
           $users =[];
        }else{
            #se pueden enviar datos a la vista
            $users = [
                'Joel',
                'Ellie',
                'Tess',
                'Tommy',
                'Bill',
            ];
            
        }

    	return view('usuarios',[
    		'users' => $users,
    		'title' => 'Listado de usuarios'
    		]); # con view se llama el archivo de la vista
    }

    #metodo que muestra el detalle de los usuarios
    public function show($id)
    {
    	 return view('descripcionusuarios',[
            'title' => 'Detalle de Usuario',
            'id' => $id
         ]);
    }

    #metodo que crea un usuario
    public function create()
    {
    	  return view('crearusuarios',[
            'title' => 'Crear Usuarios'
          ]);
    }



}

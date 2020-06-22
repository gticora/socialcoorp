<?php

namespace App\Http\Controllers; # Apellido de una clase Por decir una ruta
use App\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    //Metodos
	#metodo que muestra a los usuarios
    public function index()
    {

        //$users = DB::table('usuarios')->get();
        $users = Usuarios::all(); #consultamos de la base de datos

        $title = 'Listado de usuarios';

        return view('usuarios.usuarios', compact('title', 'users'));
    	
    }

    #metodo que muestra el detalle de los usuarios
    public function show($id)
    {
        $user = Usuarios::find($id);# se encuentra el usuario que cuente con ese id

    	 return view('usuarios.descripcionusuarios',compact('user'));
    }

    #metodo que crea un usuario
    public function create()
    {
    	  return view('crearusuarios',[
            'title' => 'Crear Usuarios'
          ]);
    }



}

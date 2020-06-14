<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    
    //metodo
    public function __invoke($name, $nickname = null){ #__invoke permite que un controlador se represente solo por una accion, llama un objeto como una funcion
	    if($nickname){
			return "Bienvenido {$name}, tu apodo es {$nickname}";
		}else{
			return "Bienvenido {$name}, no tienes apodo";
		}
    }
}

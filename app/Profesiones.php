<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesiones extends Model
{
    //

    protected $fillable = ['title']; #propiedad filable permite agregar arreglo de datos 

    public function usuarios(){
    	#Una profesion tiene muchos usuarios
        return $this->hasMany(Usuarios::class,'codiprof','codiprof'); #como la llave tiene un nombre que no es id se evian los nombres tanto de usuarios como de profesiones, se obtiene una coleccion
    }

}

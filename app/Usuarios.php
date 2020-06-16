<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuarios extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres','apellidos','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', # hidden es oculto
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean', # convierte de entero a booleano
    ];


    public static function findByEmail($email){
        return static::where(compact('email'))->first();
    }

    public function profesion(){
        # Un usuario pertenece a una profesion
        return $this->belongsTo(Profesiones::class,'codiprof','codiprof'); #como la llave tiene un nombre que no es id se evian los nombres tanto de usuarios como de profesiones, se obtiene un modelo
    }


    public function isAdmin(){
        return $this->is_admin; # un usuario es administrador 
    }

}

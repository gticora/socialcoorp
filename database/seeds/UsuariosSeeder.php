<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
        	'nombres' => 'Gustavo',
        	'apellidos' => 'Ticora',
        	'email' => 'gusticora@hotmail.com',
        	'password' => bcrypt('12345'), #bcrypt se encripta la contraseña
        	//'codiprof' => '1'
        ]); #metodo para ingresar datos
    }
}

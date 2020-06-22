<?php

use App\Usuarios; # se debe de llamar la ruta del modelo
use App\Profesiones; # se debe de llamar la ruta del modelo
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
    	//$profesion = DB::select('select * from profesiones where title = ?', ['Medicos']);

    	$profesion = Profesiones::select('codiprof')
    	->where('title', 'Medicos')
    	->value('codiprof'); 
    	#metodo take se obtiene solo un resultado
    	#metodo get para obtener los resultados
    	#metodo first se obtiene el primer resultado
    	#metodo value se obtiene el valor de un campo

        factory(Usuarios::class)->create([
            'nombres' => 'Gustavo Adolfo',
        	'email' => 'gusticora@hotmail.com',
        	'password' => bcrypt('12345'), #bcrypt se encripta la contraseña
        	'codiprof' => $profesion,
            'is_admin' => true,
        ]); #metodo para ingresar datos

       factory(Usuarios::class)->create([
           'codiprof' => $profesion
       ]);

       factory(Usuarios::class, 48)->create();


//        Usuarios::create([
//            'nombres' => 'Fernanda',
//            'apellidos' => 'Rueda',
//            'email' => 'fernada@hotmail.com',
//            'password' => bcrypt('12345'), #bcrypt se encripta la contraseña
//            'codiprof' => $profesion,
//        ]); #metodo para ingresar datos//

//        Usuarios::creat|e([
//           'nombres' => 'Sergio',
//           'apellidos' => 'Ticora',
//            'email' => 'sandres@hotmail.com',
//            'password' => bcrypt('12345'), #bcrypt se encripta la contraseña
//            'codiprof' => null,
//        ]); #metodo para ingresar datos
    }
}

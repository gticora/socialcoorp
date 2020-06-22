<?php
use App\Profesiones;  # se debe de llamar la ruta del modelo
use Illuminate\Database\Seeder;

class ProfesionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	//DB::insert('insert into profesiones (title) values (:title)', [
    	//	'title'=>'Medico',
    	//]);
        //DB::table('profesiones')->insert([
        //	'title' => 'Administrativos',//
        //]); #metodo para ingresar datos

    	Profesiones::create([
    		'title' => 'Medicos',
    	]);
    	Profesiones::create([
    		'title' => 'Administrativos',
    	]);

        factory(Profesiones::class, 17)->create();
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->truncateTables([
    		'profesiones',
            'usuarios'
    	]);
    	
        $this->call(ProfesionesSeeder::class); # se referencia el nombre de la clase
        $this->call(UsuariosSeeder::class);
    }

    public function truncateTables(array $tables){ #Metodo para vacear tabla

    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); # Metodo para romper llaves
    	foreach ($tables as $table) {
    		DB::table($table)->truncate(); # metodo para vacear la tabla
    	}
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); # Metodo para romper llaves

    }
}

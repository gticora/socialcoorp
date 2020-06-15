<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('profesiones')->insert([
        	'title' => 'Medicos',

        ]); #metodo para ingresar datos

        DB::table('profesiones')->insert([
        	'title' => 'Administrativos',

        ]); #metodo para ingresar datos
    }
}

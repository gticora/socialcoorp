<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfesionCodiprofAUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function(Blueprint $table) {
            $table->unsignedInteger('codiprof')->after('password');
            $table->foreign('codiprof')->references('codiprof')->on('profesiones');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function(Blueprint $table) {
            $table->dropForeign(['codiprof']); # primero se elimina la foranea 
            $table->dropColumn('codiprof'); #Luego se elimina el campo
        });
        
    }
}

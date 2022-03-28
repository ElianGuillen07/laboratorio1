<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Materias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Materias', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Nombre');
            $table->string('Apellido');
            $table->integer('Años');
            $table->string('Materia');
            $table->string('centro');
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

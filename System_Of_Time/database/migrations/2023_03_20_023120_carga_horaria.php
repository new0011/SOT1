<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CargaHoraria', function (Blueprint $table) {
            $table->increments('CargaHor');
            $table->integer('IDU')->unsigned();
            $table->integer('IDMat')->unsigned();
            $table->date('Dia');
            $table->time('hourStart');
            $table->time('hourEnd');            
            $table->timestamps();

            $table->foreign('IDU')->references('IDU')->on('Usuarios');
            $table->foreign('IDMat')->references('IDMat')->on('Materia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CargaHoraria');
    }
};


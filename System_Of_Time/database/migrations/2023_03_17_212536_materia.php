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
        Schema::create('Materia', function (Blueprint $table) {
            $table->increments('IDMat');
            $table->string('NameM');
            $table->integer('IDCar')->unsigned();
            $table->integer('IDCuatri')->unsigned();            
            $table->timestamps();

            $table->foreign('IDCar')->references('IDCar')->on('Carrera');
            $table->foreign('IDCuatri')->references('IDCuatri')->on('Cuatri');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Materia');
    }
};

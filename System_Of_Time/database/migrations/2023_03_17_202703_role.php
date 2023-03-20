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
        Schema::create('Role', function(Blueprint $table){
            $table->increments('IDRol');
            $table->string('Descrip');
            $table->integer('ID_Vis')->unsigned();
            $table->foreign('ID_Vis')->references('ID_Vis')->on('Vista');
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
        Schema::dropIfExists('Role');
    }
};

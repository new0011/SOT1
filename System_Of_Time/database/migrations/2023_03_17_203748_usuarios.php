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
        Schema::create('Usuarios', function(Blueprint $table){
            $table->increments('IDU');
            $table->string('NameU');
            $table->string('passU');
            $table->string('ContactP');
            $table->integer('IDRol')->unsigned();
            $table->foreign('IDRol')->references('IDRol')->on('Role');
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
        Schema::dropIfExists('Usuarios');
    }
};

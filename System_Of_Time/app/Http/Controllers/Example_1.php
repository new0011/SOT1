<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Example_1 extends Controller
{
    public function __invoke(String $Nombre){
        $Ejem2 = "Bienvenido ".$Nombre." a SOT 1 XD";
        return view('Example1', compact('Ejem2'));
    }
}

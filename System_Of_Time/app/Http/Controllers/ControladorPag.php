<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorForm1;

class ControladorPag extends Controller
{
    function fHome(){
        return view('home');
    }

    function fIngresar(){
        return view('ingresar');
    }

    function fRecuerdos($name="Intruso"){
        $arrName=['Angel', 'Jovanny', 'Petra'];
        return view('recuerdos', compact('name','arrName'));
    }

    public function procesarRecuerdos(validadorForm1 $req){
        //return $req->all();
        return redirect('/ingresar')->with('confirmacion', 'Tu recuerdo llego al controlador');
    }
}
?>

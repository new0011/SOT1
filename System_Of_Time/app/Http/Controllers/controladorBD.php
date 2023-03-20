<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\validadorForm1;
use Carbon\Carbon;

class controladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultaRec = DB::table('tb_recuerdos')->get();
        return view('recuerdos', compact('consultaRec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingresar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorForm1 $req)
    {
        DB::table('tb_recuerdos')->insert([
            'titulo'=>$req->input('txtTitulo'),
            'recuerdo'=>$req->input('txtRecuerdo'),
            'fecha'=>Carbon::now(),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        return redirect('recuerdo/create')->with('confirmacion', 'Tu recuerdo se ha guardado en la BD');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recuerdoid=DB::table('tb_recuerdos')->where('idRec', $id)->first();
        return view('editarRec', compact('recuerdoid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        DB::table('tb_recuerdos')->where('idRec', $id)->update([
            'titulo'=>$req->input('txtTitulo'),
            'recuerdo'=>$req->input('txtRecuerdo'),
            'updated_at'=>Carbon::now(),
        ]);

        return redirect('recuerdo')->with('mensaje', 'Tu recuerdo se ha actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

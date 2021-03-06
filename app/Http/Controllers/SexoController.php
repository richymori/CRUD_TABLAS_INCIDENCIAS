<?php

namespace App\Http\Controllers;

use App\Sexo;
use Illuminate\Http\Request;

class SexoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs= Sexo::all();
        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sexo = new Sexo();
        $sexo->sexo= $request['sexo'];
        $sexo->save();
        return redirect('sexos/listsexo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function show(Sexo $sexo)
    {
        $RegistroEncontrado=Sexo::find($id);
        return $RegistroEncontrado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function edit(Sexo $sexo)
    {
        return view('editarsexo', ['sexo'=>$sexo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sexo $sexo)
    {
        $sexo->sexo= $request['sexo'];
        $sexo->save();
        return redirect('sexos/listsexo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sexo $sexo)
    {
        $sexo->delete();
        return redirect('sexos/listsexo');
    }


    public function listsexo()
    {
        $rs=$this->index();
        return view('listsexo',['rs'=>$rs]);
    }
}

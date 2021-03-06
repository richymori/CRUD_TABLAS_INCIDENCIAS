<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;
use App\Sexo;
use App\Cargo;
use App\Entidad;
use App\User;




class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Perfil::with([
            'sexo',
            'cargo',
            'entidad',
            'user'
        ])->get();


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // RELACION PARA SEXOS
        $sexos=Sexo::all();

        // RELACION PARA SEXOS
        $cargos=Cargo::all();

        //RELACION PARA ENTIDADES
        $entidades=Entidad::all();

        //RELACION PARA USERS
        $users=User::all();
        return view( 'welperfil', compact(  'sexos', 'cargos', 'entidades', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Perfil();
        $model->nombres= $request['nombres'];
        $model->apellidos= $request['apellidos'];
        $model->sexo_id= $request['sexo_id'];
        $model->cargo_id= $request['cargo_id'];
        $model->entidad_id= $request['entidad_id'];
        $model->user_id= $request['user_id'];
        $model->save();
        return redirect('perfiles/listperfil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil, $id)
    {
        $registroEncontrado= Perfil::find($id);
        return $registroEncontrado;


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        return view('editarperfil', ['perfil'=>$perfil]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
        $perfil->nombres= $request['nombres'];
        $perfil->apellidos= $request['apellidos'];
        $perfil->sexo_id= $request['sexo_id'];
        $perfil->cargo_id= $request['cargo_id'];
        $perfil->entidad_id= $request['entidad_id'];
        $perfil->user_id= $request['user_id'];
        $perfil->save();
        return redirect('perfiles/listperfil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        $perfil->delete();
        return redirect('perfiles/listperfil');
    }


    public function listperfil()
    {
        $rs=$this->index();
        return view('listperfil',['rs'=>$rs]);


    }
}




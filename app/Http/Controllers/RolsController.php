<?php

namespace App\Http\Controllers;

use App\Models\Rols;
use App\Models\User;
use Illuminate\Http\Request;

class RolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['rol'] = Rols::paginate(5);
        return view('roles.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosU['users'] = User::paginate(5);
        return view('roles.create', $datosU);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->except('_token');
        $datos = User::findOrFail($id);
        Rols::insert($rol);
        return responsive()->json($rol);
        //return redirect('rols')->with('mensaje','Rol Agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rols  $rols
     * @return \Illuminate\Http\Response
     */
    public function show(Rols $rols)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rols  $rols
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Rols::findOrFail($id);
        return view('roles.edit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rols  $rols
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosRol = request()->except(['_token','_method']);

        Rols::where('id','=',$id)->update($datosRol);
        
        $rol = Rols::findOrFail($id);
        return view('roles.edit', compact('rol'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rols  $rols
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = Rols::findOrFail($id);
        Rols::destroy($id);
        //return redirect('rol')->with('mensaje','Rol Borrado');
    }
}

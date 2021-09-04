<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['rol'] = Rol::paginate(5);
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
        Rol::insert($datos);
        //return response()->json($datos);
        return redirect('rols');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rol = Rol::findOrFail($id);
        return view('roles.edit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosRol = request()->except(['_token','_method']);

        Rol::where('id','=',$id)->update($datosRol);
        
        $rol = Rol::findOrFail($id);
        return redirect('rols');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = Rol::findOrFail($id);
        Rol::destroy($id);
        return redirect('rols')->with('mensaje','Rol Borrado');
    }
}

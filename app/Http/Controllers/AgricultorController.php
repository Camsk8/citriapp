<?php

namespace App\Http\Controllers;

use App\Models\agricultor;
use Illuminate\Http\Request;

class AgricultorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agricultors = agricultor::simplePaginate(5);
        return view('Agricultor.index',compact('agricultors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Agricultor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agricultors= new agricultor;
        $agricultors->nombres=$request->nombres;
        $agricultors->apellidos=$request->apellidos;
        $agricultors->cedula=$request->cedula;
        $agricultors->email=$request->email;
        $agricultors->telefono=$request->telefono;
        $agricultors->password=$request->password;
        $agricultors->tipo_rol=$request->tipo_rol;
        $agricultors->certificado_agricultor=$request->certificado_agricultor;
        $agricultors->save();
        return redirect()->route('agricultor.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\agricultor  $agricultor
     * @return \Illuminate\Http\Response
     */
    public function show(agricultor $agricultor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\agricultor  $agricultor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $agricultors = agricultor::findOrFail($id);
       
        return view ('Agricultor.edit',compact('agricultors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\agricultor  $agricultor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $agricultor = agricultor::findOrFail($id);
        $agricultor->nombres=$request->input('nombres');
        $agricultor->apellidos=$request->input('apellidos');
        $agricultor->cedula=$request->input('cedula');
        $agricultor->email=$request->input('email');
        $agricultor->telefono=$request->input('telefono');
        $agricultor->password=$request->input('password');
        $agricultor->tipo_rol=$request->input('tipo_rol');
        $agricultor->certificado_agricultor=$request->input('certificado_agricultor');
        $agricultor->save();
        return redirect()->route('agricultor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\agricultor  $agricultor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agricultor=agricultor::findOrFail($id);
        $agricultor->delete();
        return redirect()->route('agricultor.index');

    }
}

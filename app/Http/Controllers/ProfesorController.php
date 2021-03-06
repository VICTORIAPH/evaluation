<?php

namespace App\Http\Controllers;

use App\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $profe =Profesor::all();
        return view('profesor.show', compact('profe'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profesor =  new Profesor();
        $profesor-> nombre= $request-> nombre;
        $profesor->save();
        return "profesor registrado";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesores=Profesor::find($id);
        return view('profesor.show', compact('profesores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesor)
    {
        $profesor =Profesor::find($profesor);
        return view('profesor.edit', compact('profesor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profesor= Profesor::findOrFail($id);
        $profesor->descripcion = $request->descripcion;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function profe_delete($id)
    {
        //
        $profesor =Profesor::findOrfail($id);
        $profesor->delete;
        return "profesor eliminado";

    }
    public function destroy($id)
    {
        $profesor= Profesor::find($id);
        $profesor->delete();
        return redirect()-> route('index');
    }
}

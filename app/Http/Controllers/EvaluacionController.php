<?php

namespace App\Http\Controllers;

use App\Evaluacion;
use Illuminate\Http\Request;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $evaluacion =Evaluacion::all();
        return view('evaluacion.show', compact('evaluacion'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evaluacion =Evaluacion::all();
        return view('evaluacion.create', compact('evaluacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evaluacion=Evaluacion::find($id);
        return view('evaluacion.showprincipal', compact('evaluacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    public function iniciar()
    {
        $evaluacion =Evaluacion::all();
        return view('evaluacion.iniciar', compact('evaluacion'));

    }
    public function registrarse()
    {
        $evaluacion =Evaluacion::all();
        return view('evaluacion.registrarse', compact('evaluacion'));

    }
}

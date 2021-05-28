<?php

namespace App\Http\Controllers;

use App\Evaluacion;
use Illuminate\Http\Request;
use App\Principal;

class PrincipalController extends Controller
{
    public function index()
    {
        $evaluacion =Evaluacion::all();
        return view('principal.show', compact('evaluacion'));
    }
    
    
    public function show($id)
    {
        
        $evaluaciones=Evaluacion::find($id);
        return view('principal.realizar', compact('evaluacion'));
    }



    public function create(Evaluacion $evaluacion)
    {
        return view('principal.realizar');
    }


     
   
}

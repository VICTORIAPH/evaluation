@extends('layouts.app')
@section('title', 'Evaluacion')

@section('sidebar')
  

    <h1>INSTITUTO TECNOLOGICO DE MORELIA</h1>
    
@endsection

@section('content')

  <h2>Evaluacion docente 2021</h2> 
  <h3>Realiza la evaluacion Docente a tiempo!</h3><br><br>
  <a href="{{url('/evaluacion/iniciar/sesion')}}">Realizar Evaluacion</a></br>
  <a href="{{url('/evaluacion/iniciar/sesion')}}">Registrarse</a></br></br></br>
  
  
  <form method="GET" action="{{route('iniciar')}}">
        @csrf 

    <button type="submit">iniciar sesion</button>
 
 
@endsection

@section('footer')
    <p>Recuerda que tus datos son confidenciales </p>
@endsection
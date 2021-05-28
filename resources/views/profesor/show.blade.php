@extends('layouts.app')
@section('title', 'mostrar Profesores')

@section('sidebar')
    @parent

    <p>...</p>
@endsection

@section('content')
<h1>Bienvenido a la pag principal</h1>
 
    @foreach ($profe as $profesor)</br>
        Profesor:           {{$profesor->id}} </br>
        Nombre de profesor: {{$profesor->nombre}}</br>
        Materia: {{$profesor->materia}}</br>
        Created_at:        {{$profesor->created_at}} </br>
             

        <a href="{{route('edit', $profesor->id)}}">Editar</a> </br><br>

        <form method="POST" action="{{route('destroy', $profesor->id)}}">
        @csrf  
    
    <button type="submit">Eliminar</button>

    </form>
    @endforeach
    <form method="GET" action="{{route('realizar', $profesor->id)}}">
        @csrf 

    <button type="submit">Crear</button>
  

@endsection

@section('footer')
    <h1>.</h1>
@endsection
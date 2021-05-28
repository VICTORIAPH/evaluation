@extends('layouts.app')
@section('title', 'create')

@section('sidebar')
    @parent

    <p>.</p>
@endsection


@section('content')
<h1>Bienvenido a la pag principal create profesor</h1>

<form method="POST" action="{{route('store')}}">
@csrf 

Nombre: <input type=" text" name="nombre" >
Materia: <input type=" text" name="materia" >
Enail_verified_at: <input type=" text" name="email_verified_at" >
password: <input type=" text" name="contrasena" >



<input type="submit" value="Enviar">
</form>


@endsection


@section('footer')
    <h1>Aqui va el footer.</h1>
@endsection
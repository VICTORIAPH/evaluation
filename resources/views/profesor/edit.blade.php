@extends('layouts.app')
@section('title', 'edit')

@section('sidebar')
    @parent

    <p>Aqui van los menus.</p>
@endsection


@section('content')
<h1>Bienvenido a la pag principal edit</h1>

<form method="POST" action="{{route('update', $profesor)}}">
@csrf 
@method('PUT')

Nombre: <input type=" text" name="nombre" value="{{$profesor->nombre}}">

<input type="submit" value="Actualizar">
</form>


 
@endsection


@section('footer')
    <h1>Aqui va el footer.</h1>
@endsection
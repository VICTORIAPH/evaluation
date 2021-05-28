@extends('layouts.app')
@section('title', 'create')

@section('sidebar')
    @parent

    <p>Aqui van los menus.</p>
@endsection


@section('content')
<h1>Bienvenido para realizar tu evaluzacion docente</h1>
<h2>
Por favor inicia sesion para poder realizar la Evaluacion Docente 2021
</h2>

<a href="{{url('/realizar/evaluacion')}}">Iniciar sesion</a></br>
  
  


@endsection


@section('footer')

@endsection


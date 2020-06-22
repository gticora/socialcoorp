@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
    <h1>Usuario #{{ $user->id }}</h1>
    
    <p>Nombres del usuario: {{ $user->nombres }} </p>
    <p>Apellidos del usuario: {{ $user->apellidos }} </p>
    <p>Correo electronico: {{ $user->email }} </p>

@endsection


@extends('layouts.app')

@section('titulo', 'Detalle Docente')

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($docent->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">{{$docent->materia}}</p>
    </div>
    <br>
    <a href="/docentes/{{$docent->id}}/edit" class="btn btn-warning">Editar Docente</a>

</div>

@endsection

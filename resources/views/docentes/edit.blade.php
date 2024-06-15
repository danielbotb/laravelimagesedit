@extends('layouts.app')

@section('titulo', 'Editar Docente')

@section('contenido')
<br>
<h3 class="text-center">Editar información del Docente</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/docentes/{{$docent->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombre">Modifique el Nombre del Docente</label>
        <input name="nombre" id="nombre" value="{{$docent->nombre}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="materia">Modifique la Materia</label>
        <input name="materia" id="materia" value="{{$docent->materia}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="telefono">Modifique el Telefono</label>
        <input name="telefono" id="telefono" value="{{$docent->telefono}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="correo">Modifique el Correo</label>
        <input name="correo" id="correo" value="{{$docent->correo}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="imagen">Cargar nueva imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>

@endsection

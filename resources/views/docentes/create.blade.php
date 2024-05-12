@extends('layouts.app')

@section('titulo','añadir docente')

@section('contenido')
    <br>
    <h3>Añadir Docente</h3>
    <form action="/docentes" method="post">
        @csrf
        <div class="mb-3">
          <label for="nombrecurso" class="form-label">Nombre del Docente</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="materia" class="form-label">Materia</label>
            <input type="text" class="form-control" id="materia" name="materia">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono">
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="text" class="form-control" id="correo" name="correo">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>


@endsection

@extends('layouts.app')

@section('titulo', 'Listado de Docentes')

@section('contenido')
<br>
<h3 class="text-center">Listado de Docentes</h3>
<br>
<div class="row"> {{--ya tenemos la fila--}}
    @foreach ($docent as $docentico)
    <div class="col-sm"> {{--abrimos columna--}}
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$docentico->nombre}}</h5>
              <p class="card-text">{{$docentico->materia}}</p>
              <p class="card-text">{{$docentico->telefono}}</p>
              <p class="card-text">{{$docentico->correo}}</p>
              <a href="#" class="btn btn-success">Ver detalles</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection

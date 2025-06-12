@extends('carreras.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Crear Nueva Carrera</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('carreras.index') }}">Atrás</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Ups!</strong> Hubo algunos problemas con su entrada.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('carreras.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre de la Carrera:</strong>
                <input type="text" name="nombre_carrera" class="form-control" placeholder="Ingrese Nombre de la Carrera" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Código de la Carrera:</strong>
                <input type="text" name="codigo_carrera" class="form-control" placeholder="Ingrese Código de la Carrera" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Duración en Semestres:</strong>
                <input type="number" name="duracion_semestres" class="form-control" placeholder="Ingrese Duración en Semestres" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripción:</strong>
                <textarea name="descripcion" class="form-control" rows="3" placeholder="Ingrese Descripción"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de Creación:</strong>
                <input type="date" name="fecha_creacion" class="form-control" placeholder="Ingrese Fecha de Creación">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estado:</strong>
                <select name="activa" class="form-control">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection

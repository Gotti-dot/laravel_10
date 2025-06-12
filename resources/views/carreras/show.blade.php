@extends('carreras.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Mostrar Carrera</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('carreras.index') }}">Atrás</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre de la Carrera:</strong>
                {{ $carrera->nombre_carrera }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Código de la Carrera:</strong>
                {{ $carrera->codigo_carrera }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Duración en Semestres:</strong>
                {{ $carrera->duracion_semestres }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripción:</strong>
                {{ $carrera->descripcion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de Creación:</strong>
                {{ Carbon\Carbon::parse($carrera->fecha_creacion)->format('d/m/Y') }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estado:</strong>
                {{ $carrera->activa ? 'Activo' : 'Inactivo' }}
            </div>
        </div>
    </div>
</div>
@endsection

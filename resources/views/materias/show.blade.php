@extends('materias.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Mostrar Materia</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('materias.index') }}">Atrás</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Código Materia:</strong>
                {{ $materia->codigo_materia }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre Materia:</strong>
                {{ $materia->nombre_materia }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Horas:</strong>
                {{ $materia->total_horas }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Horas Teoría:</strong>
                {{ $materia->horas_teoria }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Horas Práctica:</strong>
                {{ $materia->horas_practica }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripción:</strong>
                {{ $materia->descripcion }}
            </div>
        </div>
    </div>
</div>
@endsection

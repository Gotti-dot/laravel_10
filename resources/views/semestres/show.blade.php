@extends('semestres.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Mostrar Semestre</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('semestres.index') }}">Atras</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Número de Semestre:</strong>
                {{ $semestre->numero_semestre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre del Semestre:</strong>
                {{ $semestre->nombre_semestre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de Inicio:</strong>
                {{ Carbon\Carbon::parse($semestre->fecha_inicio)->format('d/m/Y') }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de Fin:</strong>
                {{ Carbon\Carbon::parse($semestre->fecha_fin)->format('d/m/Y') }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Activo:</strong>
                {{ $semestre->activo ? 'Sí' : 'No' }}
            </div>
        </div>
    </div>
</div>
@endsection

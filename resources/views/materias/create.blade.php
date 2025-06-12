@extends('materias.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Crear Nueva Materia</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('materias.index') }}">Atrás</a>
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

    <form action="{{ route('materias.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Código Materia:</strong>
                    <input type="text" name="codigo_materia" class="form-control" placeholder="Ingrese Código de la Materia" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre Materia:</strong>
                    <input type="text" name="nombre_materia" class="form-control" placeholder="Ingrese Nombre de la Materia" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Horas:</strong>
                    <input type="number" name="total_horas" class="form-control" placeholder="Ingrese Total de Horas" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Horas Teoría:</strong>
                    <input type="number" name="horas_teoria" class="form-control" placeholder="Ingrese Horas de Teoría">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Horas Práctica:</strong>
                    <input type="number" name="horas_practica" class="form-control" placeholder="Ingrese Horas de Práctica">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <textarea name="descripcion" class="form-control" rows="3" placeholder="Ingrese Descripción"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
@endsection

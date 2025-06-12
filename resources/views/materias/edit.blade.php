@extends('materias.layout')

@section('content')
    <div class="container">
        <h2>Editar Materia</h2>
        <form action="{{ route('materias.update', $materia->id) }}"
              method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="codigo_materia">Código Materia:</label>
                <input type="text" name="codigo_materia" class="form-control" value="{{ $materia->codigo_materia }}" required>
            </div>
            <div class="form-group">
                <label for="nombre_materia">Nombre Materia:</label>
                <input type="text" name="nombre_materia" class="form-control" value="{{ $materia->nombre_materia }}" required>
            </div>
            <div class="form-group">
                <label for="total_horas">Total Horas:</label>
                <input type="number" name="total_horas" class="form-control" value="{{ $materia->total_horas }}" required>
            </div>
            <div class="form-group">
                <label for="horas_teoria">Horas Teoría:</label>
                <input type="number" name="horas_teoria" class="form-control" value="{{ $materia->horas_teoria }}">
            </div>
            <div class="form-group">
                <label for="horas_practica">Horas Práctica:</label>
                <input type="number" name="horas_practica" class="form-control" value="{{ $materia->horas_practica }}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control" rows="3">{{ $materia->descripcion }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection

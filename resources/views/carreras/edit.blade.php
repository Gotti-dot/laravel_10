@extends('carreras.layout')

@section('content')
    <div class="container">
        <h2>Editar Carrera</h2>
        <form action="{{ route('carreras.update', $carrera->id) }}"
              method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre_carrera">Nombre de la Carrera:</label>
                <input type="text" name="nombre_carrera" class="form-control" value="{{ $carrera->nombre_carrera }}" required>
            </div>
            <div class="form-group">
                <label for="codigo_carrera">Código de la Carrera:</label>
                <input type="text" name="codigo_carrera" class="form-control" value="{{ $carrera->codigo_carrera }}" required>
            </div>
            <div class="form-group">
                <label for="duracion_semestres">Duración en Semestres:</label>
                <input type="number" name="duracion_semestres" class="form-control" value="{{ $carrera->duracion_semestres }}" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control" rows="3">{{ $carrera->descripcion }}</textarea>
            </div>
            <div class="form-group">
                <label for="fecha_creacion">Fecha de Creación:</label>
                <input type="date" name="fecha_creacion" class="form-control" value="{{ $carrera->fecha_creacion }}">
            </div>
            <div class="form-group">
                <label for="activa">Estado:</label>
                <select name="activa" class="form-control">
                    <option value="1" {{ $carrera->activa ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ !$carrera->activa ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection

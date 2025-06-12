@extends('semestres.layout')

@section('content')
    <div class="container">
        <h2>Editar Semestre</h2>
        <form action="{{ route('semestres.update', $semestre->id) }}"
              method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="numero_semestre">Número de Semestre:</label>
                <input type="number" name="numero_semestre" class="form-control" value="{{ $semestre->numero_semestre }}" required>
            </div>
            <div class="form-group">
                <label for="nombre_semestre">Nombre del Semestre:</label>
                <input type="text" name="nombre_semestre" class="form-control" value="{{ $semestre->nombre_semestre }}" required>
            </div>
            <div class="form-group">
                <label for="fecha_inicio">Fecha de Inicio:</label>
                <input type="date" name="fecha_inicio" class="form-control" value="{{ $semestre->fecha_inicio }}" required>
            </div>
            <div class="form-group">
                <label for="fecha_fin">Fecha de Fin:</label>
                <input type="date" name="fecha_fin" class="form-control" value="{{ $semestre->fecha_fin }}" required>
            </div>
            <div class="form-group">
                <label for="activo">Activo:</label>
                <select name="activo" class="form-control">
                    <option value="1" {{ $semestre->activo ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ !$semestre->activo ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection

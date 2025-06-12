@extends('docentes.layout')

@section('content')
    <div class="container">
        <h2>Editar Docente</h2>
        <form action="{{ route('docentes.update', $docente->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="cedula">Cédula:</label>
                <input type="text" name="cedula" class="form-control" value="{{ $docente->cedula }}" required>
            </div>
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" name="nombres" class="form-control" value="{{ $docente->nombres }}" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos" class="form-control" value="{{ $docente->apellidos }}" required>
            </div>
            <div class="form-group">
                <label for="titulo_academico">Título Académico:</label>
                <input type="text" name="titulo_academico" class="form-control" value="{{ $docente->titulo_academico }}">
            </div>
            <div class="form-group">
                <label for="especialidad">Especialidad:</label>
                <input type="text" name="especialidad" class="form-control" value="{{ $docente->especialidad }}">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" class="form-control" value="{{ $docente->telefono }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $docente->email }}">
            </div>
            <div class="form-group">
                <label for="fecha_contratacion">Fecha de Contratación:</label>
                <input type="date" name="fecha_contratacion" class="form-control" value="{{ $docente->fecha_contratacion }}">
            </div>
            <div class="form-group">
                <label for="activo">Estado:</label>
                <select name="activo" class="form-control">
                    <option value="1" {{ $docente->activo ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ !$docente->activo ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection

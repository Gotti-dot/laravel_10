@extends('estudiantes.layout')

@section('content')
    <div class="container">
        <h2>Editar Estudiante</h2>
        <form action="{{ route('estudiantes.update', $estudiante->id) }}"
              method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $estudiante->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" class="form-control" value="{{ $estudiante->apellido }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $estudiante->email }}" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" class="form-control" value="{{ $estudiante->telefono }}">
            </div>
            <div class="form-group">
                <label for="genero">Género:</label>
                <select name="genero" class="form-control">
                    <option value="Masculino" {{ $estudiante->genero == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ $estudiante->genero == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                    <option value="Otro" {{ $estudiante->genero == 'Otro' ? 'selected' : '' }}>Otro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select name="estado" class="form-control">
                    <option value="Activo" {{ $estudiante->estado == 'Activo' ? 'selected' : '' }}>Activo</option>
                    <option value="Inactivo" {{ $estudiante->estado == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
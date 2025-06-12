@extends('carreras.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Laboratorio CRUD en Laravel 10</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('carreras.create') }}">Crear Nueva Carrera</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nro</th>
                <th>Nombre de la Carrera</th>
                <th>Código de la Carrera</th>
                <th>Duración (Semestres)</th>
                <th>Fecha de Creación</th>
                <th>Estado</th>
                <th width="280px">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carreras as $car)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $car->nombre_carrera }}</td>
                    <td>{{ $car->codigo_carrera }}</td>
                    <td>{{ $car->duracion_semestres }}</td>
                    <td>{{ Carbon\Carbon::parse($car->fecha_creacion)->format('d/m/Y') }}</td>
                    <td>{{ $car->activa ? 'Activo' : 'Inactivo' }}</td>
                    <td>
                        <form action="{{ route('carreras.destroy', $car->id) }}" method="POST" class="delete-form">
                            <a class="btn btn-info" href="{{ route('carreras.show', $car->id) }}">Ver</a>

                            <a class="btn btn-primary" href="{{ route('carreras.edit', $car->id) }}">Editar</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirmDelete()">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $carreras->links('pagination::bootstrap-5') !!}
</div>

<script type="text/javascript">
    function confirmDelete() {
        return confirm("¿Estás seguro de que deseas eliminar esta carrera?");
    }
</script>
@endsection

@extends('semestres.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Laboratorio CRUD en Laravel 10</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('semestres.create') }}">Crear Nuevo Semestre</a>
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
                <th>Número de Semestre</th>
                <th>Nombre del Semestre</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Activo</th>
                <th width="280px">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($semestres as $sem)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $sem->numero_semestre }}</td>
                    <td>{{ $sem->nombre_semestre }}</td>
                    <td>{{ Carbon\Carbon::parse($sem->fecha_inicio)->format('d/m/Y') }}</td>
                    <td>{{ Carbon\Carbon::parse($sem->fecha_fin)->format('d/m/Y') }}</td>
                    <td>{{ $sem->activo ? 'Sí' : 'No' }}</td>
                    <td>
                        <form action="{{ route('semestres.destroy', $sem->id) }}" method="POST" class="delete-form">
                            <a class="btn btn-info" href="{{ route('semestres.show', $sem->id) }}">Ver</a>

                            <a class="btn btn-primary" href="{{ route('semestres.edit', $sem->id) }}">Editar</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirmDelete()">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $semestres->links('pagination::bootstrap-5') !!}
</div>

<script type="text/javascript">
    function confirmDelete() {
        return confirm("¿Estás seguro de que deseas eliminar este semestre?");
    }
</script>
@endsection

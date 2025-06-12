@extends('materias.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Laboratorio CRUD en Laravel 10</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('materias.create') }}">Crear Nueva Materia</a>
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
                <th>Código Materia</th>
                <th>Nombre Materia</th>
                <th>Total Horas</th>
                <th>Horas Teoría</th>
                <th>Horas Práctica</th>
                <th>Descripción</th>
                <th width="280px">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materias as $mat)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $mat->codigo_materia }}</td>
                    <td>{{ $mat->nombre_materia }}</td>
                    <td>{{ $mat->total_horas }}</td>
                    <td>{{ $mat->horas_teoria }}</td>
                    <td>{{ $mat->horas_practica }}</td>
                    <td>{{ $mat->descripcion }}</td>
                    <td>
                        <form action="{{ route('materias.destroy', $mat->id) }}" method="POST" class="delete-form">
                            <a class="btn btn-info" href="{{ route('materias.show', $mat->id) }}">Ver</a>
                            <a class="btn btn-primary" href="{{ route('materias.edit', $mat->id) }}">Editar</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirmDelete()">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $materias->links('pagination::bootstrap-5') !!}
</div>

<script type="text/javascript">
    function confirmDelete() {
        return confirm("¿Estás seguro de que deseas eliminar esta materia?");
    }
</script>
@endsection

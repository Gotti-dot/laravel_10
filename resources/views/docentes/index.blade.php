@extends('docentes.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Laboratorio CRUD en Laravel 10</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('docentes.create') }}">Crear Nuevo Docente</a>
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
                <th>Cédula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Título Académico</th>
                <th>Especialidad</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Fecha de Contratación</th>
                <th>Estado</th>
                <th width="280px">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($docentes as $doc)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $doc->cedula }}</td>
                    <td>{{ $doc->nombres }}</td>
                    <td>{{ $doc->apellidos }}</td>
                    <td>{{ $doc->titulo_academico }}</td>
                    <td>{{ $doc->especialidad }}</td>
                    <td>{{ $doc->telefono }}</td>
                    <td>{{ $doc->email }}</td>
                    <td>{{ Carbon\Carbon::parse($doc->fecha_contratacion)->format('d/m/Y') }}</td>
                    <td>{{ $doc->activo ? 'Activo' : 'Inactivo' }}</td>
                    <td>
                        <form action="{{ route('docentes.destroy', $doc->id) }}" method="POST" class="delete-form">
                            <a class="btn btn-info" href="{{ route('docentes.show', $doc->id) }}">Ver</a>

                            <a class="btn btn-primary" href="{{ route('docentes.edit', $doc->id) }}">Editar</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirmDelete()">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $docentes->links('pagination::bootstrap-5') !!}
</div>

<script type="text/javascript">
    function confirmDelete() {
        return confirm("¿Estás seguro de que deseas eliminar este docente?");
    }
</script>
@endsection

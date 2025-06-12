@extends('estudiantes.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Laboratorio CRUD en Laravel 10</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('estudiantes.create') }}">Crear Nuevo Estudiante</a>
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
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Fecha de Nacimiento</th>
                <th>Estado</th>
                <th width="280px">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $est)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $est->nombre }}</td>
                    <td>{{ $est->apellido }}</td>
                    <td>{{ $est->email }}</td>
                    <td>{{ Carbon\Carbon::parse($est->fecha_nacimiento)->format('d/m/Y') }}</td>
                    <td>{{ $est->estado }}</td>
                    <td>
                        <form action="{{ route('estudiantes.destroy', $est->id) }}" method="POST" class="delete-form">
                            <a class="btn btn-info" href="{{ route('estudiantes.show', $est->id) }}">Ver</a>

                            <a class="btn btn-primary" href="{{ route('estudiantes.edit', $est->id) }}">Editar</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirmDelete()">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $estudiantes->links('pagination::bootstrap-5') !!}
</div>

<script type="text/javascript">
    function confirmDelete() {
        return confirm("¿Estás seguro de que deseas eliminar este estudiante?");
    }
</script>
@endsection
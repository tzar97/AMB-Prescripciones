
@extends('layouts.app')

@section('title', 'Listado de Medicamentos')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Listado de Medicamentos</h1>

    <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Volver al Menú Principal</a>
    <a href="{{ route('medicamentos.create') }}" class="btn btn-primary mb-3">Agregar Nuevo Medicamento</a>
    
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nombre Comercial</th>
                <th>Composición</th>
                <th>Presentación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicamentos as $medicamento)
                <tr>
                    <td>{{ $medicamento->nombre_comercial }}</td>
                    <td>{{ $medicamento->composicion }}</td>
                    <td>{{ $medicamento->presentacion }}</td>
                    <td>
                        <a href="{{ route('medicamentos.edit', $medicamento->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('medicamentos.destroy', $medicamento->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

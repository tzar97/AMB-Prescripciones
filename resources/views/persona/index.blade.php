<!-- resources/views/index.blade.php -->
@extends('layouts.app')

@section('title', 'Listado de Personas')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Listado de Personas</h1>
    <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Volver al Menú Principal</a>
    <a href="{{ route('personas.create') }}" class="btn btn-primary mb-3">Agregar Nueva Persona</a>
    
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $persona->nombre }}</td>
                    <td>{{ $persona->apellido }}</td>
                    <td>{{ $persona->dni }}</td>
                    <td>
                        <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display:inline-block;">
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

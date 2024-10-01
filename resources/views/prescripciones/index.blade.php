<!-- resources/views/prescripciones/index.blade.php -->
@extends('layouts.app')

@section('title', 'Listado de Prescripciones')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Listado de Prescripciones</h1>

    <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Volver al Menú Principal</a>
    
    <a href="{{ route('prescripciones.create') }}" class="btn btn-primary mb-3">Agregar Nueva Prescripción</a>
    
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Paciente</th>
                <th>Medicamento</th>
                <th>Fecha de Prescripción</th>
                <th>Observaciones</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prescripciones as $prescripcion)
                <tr>
                    <td>{{ $prescripcion->persona->nombre }} {{ $prescripcion->persona->apellido }}</td>
                    <td>{{ $prescripcion->medicamento->nombre_comercial }}</td>
                    <td>{{ $prescripcion->fecha_prescripcion }}</td>
                    <td>{{ $prescripcion->observaciones }}</td>
                    <td>
                        <a href="{{ route('prescripciones.edit', $prescripcion->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('prescripciones.destroy', $prescripcion->id) }}" method="POST" style="display:inline-block;">
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

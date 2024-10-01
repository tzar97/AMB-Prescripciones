<!-- resources/views/prescripciones/create.blade.php -->
@extends('layouts.app')

@section('title', 'Agregar Nueva Prescripción')

@section('content')
<div class="container mt-4">
    <h1>Agregar Nueva Prescripción</h1>
    <form action="{{ route('prescripciones.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="persona_id">Paciente:</label>
            <select class="form-control" id="persona_id" name="persona_id" required>
                <option value="" disabled selected>Seleccione un paciente</option>
                @foreach ($personas as $persona)
                    <option value="{{ $persona->id }}">{{ $persona->nombre }} {{ $persona->apellido }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="medicamento_id">Medicamento:</label>
            <select class="form-control" id="medicamento_id" name="medicamento_id" required>
                <option value="" disabled selected>Seleccione un medicamento</option>
                @foreach ($medicamentos as $medicamento)
                    <option value="{{ $medicamento->id }}">{{ $medicamento->nombre_comercial }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_prescripcion">Fecha de Prescripción:</label>
            <input type="date" class="form-control" id="fecha_prescripcion" name="fecha_prescripcion" required>
        </div>
        <div class="form-group">
            <label for="observaciones">Observaciones:</label>
            <textarea class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('prescripciones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

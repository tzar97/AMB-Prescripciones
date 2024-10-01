<!-- resources/views/prescripciones/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Editar Prescripción')

@section('content')
<div class="container mt-4">
    <h1>Editar Prescripción</h1>
    <form action="{{ route('prescripciones.update', $prescripcion->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="persona_id">Paciente:</label>
            <select class="form-control" id="persona_id" name="persona_id" required>
                @foreach ($personas as $persona)
                    <option value="{{ $persona->id }}" {{ $prescripcion->persona_id == $persona->id ? 'selected' : '' }}>
                        {{ $persona->nombre }} {{ $persona->apellido }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="medicamento_id">Medicamento:</label>
            <select class="form-control" id="medicamento_id" name="medicamento_id" required>
                @foreach ($medicamentos as $medicamento)
                    <option value="{{ $medicamento->id }}" {{ $prescripcion->medicamento_id == $medicamento->id ? 'selected' : '' }}>
                        {{ $medicamento->nombre_comercial }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_prescripcion">Fecha de Prescripción:</label>
            <input type="date" class="form-control" id="fecha_prescripcion" name="fecha_prescripcion" value="{{ $prescripcion->fecha_prescripcion }}" required>
        </div>
        <div class="form-group">
            <label for="observaciones">Observaciones:</label>
            <textarea class="form-control" id="observaciones" name="observaciones" rows="3">{{ $prescripcion->observaciones }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('prescripciones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

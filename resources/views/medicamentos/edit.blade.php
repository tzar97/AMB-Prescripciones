<!-- resources/views/medicamentos/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Editar Medicamento')

@section('content')
<div class="container mt-4">
    <h1>Editar Medicamento</h1>
    <form action="{{ route('medicamentos.update', $medicamento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre_comercial">Nombre Comercial:</label>
            <input type="text" class="form-control" id="nombre_comercial" name="nombre_comercial" value="{{ $medicamento->nombre_comercial }}" required>
        </div>
        <div class="form-group">
            <label for="composicion">Composición:</label>
            <input type="text" class="form-control" id="composicion" name="composicion" value="{{ $medicamento->composicion }}">
        </div>
        <div class="form-group">
            <label for="presentacion">Presentación:</label>
            <input type="text" class="form-control" id="presentacion" name="presentacion" value="{{ $medicamento->presentacion }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('medicamentos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

<!-- resources/views/medicamentos/create.blade.php -->
@extends('layouts.app')

@section('title', 'Agregar Nuevo Medicamento')

@section('content')
<div class="container mt-4">
    <h1>Agregar Nuevo Medicamento</h1>
    <form action="{{ route('medicamentos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre_comercial">Nombre Comercial:</label>
            <input type="text" class="form-control" id="nombre_comercial" name="nombre_comercial" required>
        </div>
        <div class="form-group">
            <label for="composicion">Composición:</label>
            <input type="text" class="form-control" id="composicion" name="composicion">
        </div>
        <div class="form-group">
            <label for="presentacion">Presentación:</label>
            <input type="text" class="form-control" id="presentacion" name="presentacion">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('medicamentos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

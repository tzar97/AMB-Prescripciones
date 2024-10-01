<!-- resources/views/create.blade.php -->
@extends('layouts.app')

@section('title', 'Agregar Nueva Persona')

@section('content')
<div class="container mt-4">
    <h1>Agregar Nueva Persona</h1>
    <form action="{{ route('personas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="form-group">
            <label for="dni">DNI:</label>
            <input type="text" class="form-control" id="dni" name="dni" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('personas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

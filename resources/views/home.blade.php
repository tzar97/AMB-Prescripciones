<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<style>
    
    .home-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 100vh; /
        background-image: url('/imagenes/2  .jpg'); 
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .content-overlay {
        background-color: rgba(255, 255, 255, 0.7); 
        padding: 60px;
        border-radius: 8px;
    }

    .options-container {
        display: flex;
        gap: 20px; /
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 20px;
    }

    .option-card {
        width: 150px;
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #ddd;
        background-color: #f8f9fa; 
        border-radius: 8px;
        text-decoration: none;
        color: #000;
        font-weight: bold;
        transition: transform 0.2s;
    }

    .option-card:hover {
        transform: scale(1.05); /
    }
</style>

<div class="home-container">
    <div class="content-overlay">
        <h1 class="mb-3" style="margin-top: -50px;">Bienvenido a Gestión Médica</h1>
        <p>Seleccione una de las siguientes opciones para empezar:</p>
        <div class="options-container">
            <a href="{{ route('personas.index') }}" class="option-card">
                Gestión de Personas
            </a>
            <a href="{{ route('medicamentos.index') }}" class="option-card">
                Gestión de Medicamentos
            </a>
            <a href="{{ route('prescripciones.index') }}" class="option-card">
                Gestión de Prescripciones
            </a>
        </div>
    </div>
</div>
@endsection

<?php

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\PrescripcionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

// Ruta raíz (Welcome)
Route::get('/', function () {
    return view('welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Ruta para el Home (Dashboard)
Route::get('/home', function () {
    return view('home'); // Cambia Inertia::render a view() para que apunte a home.blade.php
})->middleware(['auth', 'verified'])->name('home');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    // Perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Ruta para CRUD de Personas
    Route::resource('personas', PersonaController::class);

    // Ruta para CRUD de Medicamentos
    Route::resource('medicamentos', MedicamentoController::class);

    // Ruta para CRUD de Prescripciones
    Route::resource('prescripciones', PrescripcionController::class);
});

require __DIR__.'/auth.php';

<?php

namespace App\Http\Controllers;

use App\Models\Prescripcion;
use App\Models\Persona;
use App\Models\Medicamento;
use Illuminate\Http\Request;

class PrescripcionController extends Controller
{
    // Mostrar listado de prescripciones
    public function index()
    {
        $prescripciones = Prescripcion::with(['persona', 'medicamento'])->get();
        return view('prescripciones.index', compact('prescripciones')); // Asegúrate de que la ruta de la vista sea correcta
    }

    // Mostrar formulario para crear una nueva prescripción
    public function create()
    {
        $personas = Persona::all();
        $medicamentos = Medicamento::all();
        return view('prescripciones.create', compact('personas', 'medicamentos')); // Ajusta la ruta si es necesario
    }

    // Guardar una nueva prescripción
    public function store(Request $request)
    {
        // Validación y lógica para guardar la prescripción
        Prescripcion::create($request->all());
        return redirect()->route('prescripciones.index')->with('success', 'Prescripción creada correctamente.');
    }

    // Mostrar formulario para editar una prescripción
    public function edit(Prescripcion $prescripcion)
    {
        $personas = Persona::all();
        $medicamentos = Medicamento::all();
        return view('prescripciones.edit', compact('prescripcion', 'personas', 'medicamentos')); // Ajusta la ruta si es necesario
    }

    // Actualizar los datos de una prescripción
    public function update(Request $request, Prescripcion $prescripcion)
    {
        // Validación y lógica para actualizar la prescripción
        $prescripcion->update($request->all());
        return redirect()->route('prescripciones.index')->with('success', 'Prescripción actualizada correctamente.');
    }

    // Eliminar una prescripción
    public function destroy(Prescripcion $prescripcion)
    {
        $prescripcion->delete();
        return redirect()->route('prescripciones.index')->with('success', 'Prescripción eliminada correctamente.');
    }
}

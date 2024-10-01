<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    // Mostrar listado de medicamentos
    public function index()
    {
        $medicamentos = Medicamento::all();
        return view('medicamentos.index', compact('medicamentos')); // Asegúrate de que la ruta de la vista sea correcta
    }

    // Mostrar formulario para crear un nuevo medicamento
    public function create()
    {
        return view('medicamentos.create'); // Ajusta la ruta si es necesario
    }

    // Guardar un nuevo medicamento
    public function store(Request $request)
    {
        // Validación y lógica para guardar el medicamento
        Medicamento::create($request->all());
        return redirect()->route('medicamentos.index')->with('success', 'Medicamento creado correctamente.');
    }

    // Mostrar formulario para editar un medicamento
    public function edit(Medicamento $medicamento)
    {
        return view('medicamentos.edit', compact('medicamento')); // Ajusta la ruta si es necesario
    }

    // Actualizar los datos de un medicamento
    public function update(Request $request, Medicamento $medicamento)
    {
        // Validación y lógica para actualizar el medicamento
        $medicamento->update($request->all());
        return redirect()->route('medicamentos.index')->with('success', 'Medicamento actualizado correctamente.');
    }

    // Eliminar un medicamento
    public function destroy(Medicamento $medicamento)
    {
        $medicamento->delete();
        return redirect()->route('medicamentos.index')->with('success', 'Medicamento eliminado correctamente.');
    }
}

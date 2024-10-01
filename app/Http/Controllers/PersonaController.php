<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    // Mostrar listado de personas
    public function index()
    {
        $personas = Persona::all(); // Recuperar todas las personas
        return view('persona.index', compact('personas')); // Asegúrate de que apunte a persona.index
    }

    // Crear nueva persona
    public function create()
    {
        return view('persona.create');
    }

    // Guardar nueva persona
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'dni' => 'required|numeric',
        ]);

        Persona::create($request->all());

        return redirect()->route('personas.index')->with('success', 'Persona creada correctamente.');
    }

    // Editar persona
    public function edit(Persona $persona)
    {
        return view('persona.edit', compact('persona'));
    }

    // Actualizar persona
    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'dni' => 'required|numeric',
        ]);

        $persona->update($request->all());

        return redirect()->route('personas.index')->with('success', 'Persona actualizada correctamente.');
    }

    // Eliminar persona
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index')->with('success', 'Persona eliminada correctamente.');
    }
}

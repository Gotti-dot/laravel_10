<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materias = Materia::latest()->paginate(5);
        return view('materias.index', compact('materias'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo_materia' => 'required|string|max:20|unique:materias,codigo_materia',
            'nombre_materia' => 'required|string|max:100',
            'total_horas' => 'required|integer',
            'horas_teoria' => 'nullable|integer',
            'horas_practica' => 'nullable|integer',
            'descripcion' => 'nullable|string',
        ]);

        Materia::create($request->all());
        return redirect()->route('materias.index')->with('success', 'Materia creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        return view('materias.show', compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia)
    {
        return view('materias.edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia)
    {
        $request->validate([
            'codigo_materia' => 'required|string|max:20|unique:materias,codigo_materia,' . $materia->id,
            'nombre_materia' => 'required|string|max:100',
            'total_horas' => 'required|integer',
            'horas_teoria' => 'nullable|integer',
            'horas_practica' => 'nullable|integer',
            'descripcion' => 'nullable|string',
        ]);

        $materia->update($request->all());
        return redirect()->route('materias.index')->with('success', 'Materia actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();
        return redirect()->route('materias.index')->with('success', 'Materia eliminada con éxito.');
    }
}

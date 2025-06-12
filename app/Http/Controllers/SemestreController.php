<?php

namespace App\Http\Controllers;

use App\Models\Semestre;
use Illuminate\Http\Request;

class SemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semestres = Semestre::latest()->paginate(5);
        return view('semestres.index', compact('semestres'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('semestres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero_semestre' => 'required|integer|min:1',
            'nombre_semestre' => 'required|string|max:50',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'activo' => 'required|boolean',
        ]);

        Semestre::create($request->all());
        return redirect()->route('semestres.index')->with('success', 'Semestre creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Semestre $semestre)
    {
        return view('semestres.show', compact('semestre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semestre $semestre)
    {
        return view('semestres.edit', compact('semestre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Semestre $semestre)
    {
        $request->validate([
            'numero_semestre' => 'required|integer|min:1',
            'nombre_semestre' => 'required|string|max:50',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'activo' => 'required|boolean',
        ]);

        $semestre->update($request->all());
        return redirect()->route('semestres.index')->with('success', 'Semestre actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semestre $semestre)
    {
        $semestre->delete();
        return redirect()->route('semestres.index')->with('success', 'Semestre eliminado con éxito.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carreras = Carrera::latest()->paginate(5);
        return view('carreras.index', compact('carreras'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carreras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_carrera' => 'required|string|max:100',
            'codigo_carrera' => 'required|string|max:20|unique:carreras,codigo_carrera',
            'duracion_semestres' => 'required|integer',
            'descripcion' => 'nullable|string',
            'fecha_creacion' => 'nullable|date',
            'activa' => 'required|boolean',
        ]);

        Carrera::create($request->all());
        return redirect()->route('carreras.index')->with('success', 'Carrera creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrera $carrera)
    {
        return view('carreras.show', compact('carrera'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrera $carrera)
    {
        return view('carreras.edit', compact('carrera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrera $carrera)
    {
        $request->validate([
            'nombre_carrera' => 'required|string|max:100',
            'codigo_carrera' => 'required|string|max:20|unique:carreras,codigo_carrera,' . $carrera->id,
            'duracion_semestres' => 'required|integer',
            'descripcion' => 'nullable|string',
            'fecha_creacion' => 'nullable|date',
            'activa' => 'required|boolean',
        ]);

        $carrera->update($request->all());
        return redirect()->route('carreras.index')->with('success', 'Carrera actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrera $carrera)
    {
        $carrera->delete();
        return redirect()->route('carreras.index')->with('success', 'Carrera eliminada con éxito.');
    }
}

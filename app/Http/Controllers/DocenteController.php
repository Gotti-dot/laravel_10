<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docentes = Docente::latest()->paginate(5);
        return view('docentes.index', compact('docentes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cedula' => 'required|string|max:20|unique:docentes,cedula',
            'nombres' => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'titulo_academico' => 'nullable|string|max:100',
            'especialidad' => 'nullable|string|max:100',
            'telefono' => 'nullable|string|max:20',
            'email' => 'nullable|email|unique:docentes,email|max:100',
            'fecha_contratacion' => 'nullable|date',
            'activo' => 'required|boolean',
        ]);

        Docente::create($request->all());
        return redirect()->route('docentes.index')->with('success', 'Docente creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Docente $docente)
    {
        return view('docentes.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        return view('docentes.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Docente $docente)
    {
        $request->validate([
            'cedula' => 'required|string|max:20|unique:docentes,cedula,' . $docente->id,
            'nombres' => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'titulo_academico' => 'nullable|string|max:100',
            'especialidad' => 'nullable|string|max:100',
            'telefono' => 'nullable|string|max:20',
            'email' => 'nullable|email|unique:docentes,email|max:100',
            'fecha_contratacion' => 'nullable|date',
            'activo' => 'required|boolean',
        ]);

        $docente->update($request->all());
        return redirect()->route('docentes.index')->with('success', 'Docente actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Docente $docente)
    {
        $docente->delete();
        return redirect()->route('docentes.index')->with('success', 'Docente eliminado con éxito.');
    }
}

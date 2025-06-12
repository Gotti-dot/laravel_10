<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Estudiante::latest()->paginate(5);
         return view('estudiantes.index',compact('estudiantes'))
             ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
    'nombre' => 'required|string|max:100',
    'apellido' => 'required|string|max:100',
    'email' => 'required|email|unique:estudiantes,email',
    'telefono' => 'nullable|string|max:20',
    'fecha_nacimiento' => 'nullable|date',
    'direccion' => 'nullable|string|max:255',
    'genero' => 'required|in:Masculino,Femenino,Otro',
    'estado' => 'required|in:Activo,Inactivo',
    ]);

    Estudiante::create($request->all());
    return redirect()->route('estudiantes.index')->with('success', 'Estudiante creado con éxito.');


    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)
    {
        return view('estudiantes.show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudiante $estudiante)
    {
        return view('estudiantes.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
    'nombre' => 'required|string|max:100',
    'apellido' => 'required|string|max:100',
    'email' => 'required|email|unique:estudiantes,email,' . $estudiante->id,
    'telefono' => 'nullable|string|max:20',
    'fecha_nacimiento' => 'nullable|date',
    'direccion' => 'nullable|string|max:255',
    'genero' => 'required|in:Masculino,Femenino,Otro',
    'estado' => 'required|in:Activo,Inactivo',
    ]);

    $estudiante->update($request->all());
    return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
    return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado con éxito.');
    }
}

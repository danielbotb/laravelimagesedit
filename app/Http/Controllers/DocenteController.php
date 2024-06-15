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
        $docent = Docente::all();
        // return $docente;
        return view('docentes.index', compact('docent'));
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
        // return $request->all(); con esto devuelvo toda la información
        $docent = new Docente();
        $docent->nombre = $request->input('nombre');
        $docent->materia = $request->input('materia');
        $docent->telefono = $request->input('telefono');
        $docent->correo = $request->input('correo');

        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $docent->imagen = $request->file('imagen')->store('public/docentes');

        }
        $docent->save();
        return 'Guardado exitoso';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $docent=Docente::find($id);
        return view('docentes.show', compact('docent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $docent = Docente::find($id);
        return view('docentes.edit',compact('docent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $docent = Docente::find($id);
        $docent->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $docent->imagen = $request->file('imagen')->store('public/docentes');
            $docent->save();
            return 'Docente actualizado';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

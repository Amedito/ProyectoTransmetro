<?php

namespace App\Http\Controllers;

use App\Models\GuardiasSeguridad;
use App\Http\Requests\GuardiasSeguridadRequest;

/**
 * Class GuardiasSeguridadController
 * @package App\Http\Controllers
 */
class GuardiasSeguridadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guardiasSeguridads = GuardiasSeguridad::paginate();

        return view('guardias-seguridad.index', compact('guardiasSeguridads'))
            ->with('i', (request()->input('page', 1) - 1) * $guardiasSeguridads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $guardiasSeguridad = new GuardiasSeguridad();
        return view('guardias-seguridad.create', compact('guardiasSeguridad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardiasSeguridadRequest $request)
    {
        GuardiasSeguridad::create($request->validated());

        return redirect()->route('guardias-seguridads.index')
            ->with('success', 'Guardia de Seguridad Creado con Exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $guardiasSeguridad = GuardiasSeguridad::find($id);

        return view('guardias-seguridad.show', compact('guardiasSeguridad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $guardiasSeguridad = GuardiasSeguridad::find($id);

        return view('guardias-seguridad.edit', compact('guardiasSeguridad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GuardiasSeguridadRequest $request, GuardiasSeguridad $guardiasSeguridad)
    {
        $guardiasSeguridad->update($request->validated());

        return redirect()->route('guardias-seguridads.index')
            ->with('success', 'Guardia de Seguridad Actualizado con Exito.');
    }

    public function destroy($id)
    {
        GuardiasSeguridad::find($id)->delete();

        return redirect()->route('guardias-seguridads.index')
            ->with('success', 'Guardia de Seguridad Eliminado con Exito.');
    }
}

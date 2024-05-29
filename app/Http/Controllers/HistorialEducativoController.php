<?php

namespace App\Http\Controllers;

use App\Models\HistorialEducativo;
use App\Http\Requests\HistorialEducativoRequest;
use App\Models\Piloto;

/**
 * Class HistorialEducativoController
 * @package App\Http\Controllers
 */
class HistorialEducativoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historialEducativos = HistorialEducativo::paginate();

        return view('historial-educativo.index', compact('historialEducativos'))
            ->with('i', (request()->input('page', 1) - 1) * $historialEducativos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $historialEducativo = new HistorialEducativo();
        $pilotos = Piloto::pluck('nombre', 'id');

        return view('historial-educativo.create', compact('historialEducativo', 'pilotos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HistorialEducativoRequest $request)
    {
        HistorialEducativo::create($request->validated());

        return redirect()->route('historial-educativos.index')
            ->with('success', 'Historial Educativo Creado con Exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $historialEducativo = HistorialEducativo::find($id);

        return view('historial-educativo.show', compact('historialEducativo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $historialEducativo = HistorialEducativo::find($id);
        $pilotos = Piloto::pluck('nombre', 'id');

        return view('historial-educativo.edit', compact('historialEducativo', 'pilotos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HistorialEducativoRequest $request, HistorialEducativo $historialEducativo)
    {
        $historialEducativo->update($request->validated());

        return redirect()->route('historial-educativos.index')
            ->with('success', 'Historial Educativo Actualizado con Exito.');
    }

    public function destroy($id)
    {
        HistorialEducativo::find($id)->delete();

        return redirect()->route('historial-educativos.index')
            ->with('success', 'Historial Educativo Eliminado con Exito.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\EstacionesLinea;
use App\Http\Requests\EstacionesLineaRequest;
use App\Models\Estacione;
use App\Models\Linea;

/**
 * Class EstacionesLineaController
 * @package App\Http\Controllers
 */
class EstacionesLineaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estacionesLineas = EstacionesLinea::paginate();

        return view('estaciones-linea.index', compact('estacionesLineas'))
            ->with('i', (request()->input('page', 1) - 1) * $estacionesLineas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estacionesLinea = new EstacionesLinea();

        $estacion = Estacione::pluck('nombre', 'id');
        $linea = Linea::pluck('nombre', 'id');

        return view('estaciones-linea.create', compact('estacionesLinea', 'estacion', 'linea'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EstacionesLineaRequest $request)
    {
        EstacionesLinea::create($request->validated());

        return redirect()->route('estaciones-lineas.index')
            ->with('success', 'Orden de Estacion y Linea de Buses Creada con Exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $estacionesLinea = EstacionesLinea::find($id);

        return view('estaciones-linea.show', compact('estacionesLinea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $estacionesLinea = EstacionesLinea::find($id);
        $estacion = Estacione::pluck('nombre', 'id');
        $linea = Linea::pluck('nombre', 'id');

        return view('estaciones-linea.edit', compact('estacionesLinea', 'estacion', 'linea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EstacionesLineaRequest $request, EstacionesLinea $estacionesLinea)
    {
        $estacionesLinea->update($request->validated());

        return redirect()->route('estaciones-lineas.index')
            ->with('success', 'Orden de Estacion y Linea de Buses Actualizada con Exito.');
    }

    public function destroy($id)
    {
        EstacionesLinea::find($id)->delete();

        return redirect()->route('estaciones-lineas.index')
            ->with('success', 'Orden de Estacion y Linea de Buses Eliminada con Exito.');
    }
}

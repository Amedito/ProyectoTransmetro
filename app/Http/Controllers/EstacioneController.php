<?php

namespace App\Http\Controllers;

use App\Models\Estacione;
use App\Http\Requests\EstacioneRequest;
use App\Models\GuardiasSeguridad;
use App\Models\Municipalidade;
use App\Models\Operadore;

/**
 * Class EstacioneController
 * @package App\Http\Controllers
 */
class EstacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estaciones = Estacione::paginate();

        return view('estacione.index', compact('estaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $estaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estacione = new Estacione();

        $municipalidad = Municipalidade::pluck('municipio', 'id');
        $operador = Operadore::pluck('nombre', 'id');
        $guardia = GuardiasSeguridad::pluck('nombre', 'id');

        return view('estacione.create', compact('estacione', 'municipalidad', 'operador', 'guardia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EstacioneRequest $request)
    {
        Estacione::create($request->validated());

        return redirect()->route('estaciones.index')
            ->with('success', 'Estacion de Bus Creada con Exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $estacione = Estacione::find($id);

        return view('estacione.show', compact('estacione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $estacione = Estacione::find($id);

        $municipalidad = Municipalidade::pluck('municipio', 'id');
        $operador = Operadore::pluck('nombre', 'id');
        $guardia = GuardiasSeguridad::pluck('nombre', 'id');

        return view('estacione.edit', compact('estacione', 'municipalidad', 'operador', 'guardia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EstacioneRequest $request, Estacione $estacione)
    {
        $estacione->update($request->validated());

        return redirect()->route('estaciones.index')
            ->with('success', 'Estacion de Bus Actualizada con Exito.');
    }

    public function destroy($id)
    {
        Estacione::find($id)->delete();

        return redirect()->route('estaciones.index')
            ->with('success', 'Estacion de Bus Eliminada con Exito.');
    }
}

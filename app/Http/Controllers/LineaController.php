<?php

namespace App\Http\Controllers;

use App\Models\Linea;
use App\Http\Requests\LineaRequest;
use App\Models\Municipalidade;

/**
 * Class LineaController
 * @package App\Http\Controllers
 */
class LineaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lineas = Linea::paginate();

        return view('linea.index', compact('lineas'))
            ->with('i', (request()->input('page', 1) - 1) * $lineas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $linea = new Linea();
        $municipalidad = Municipalidade::pluck('municipio', 'id');

        return view('linea.create', compact('linea', 'municipalidad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LineaRequest $request)
    {
        Linea::create($request->validated());

        return redirect()->route('lineas.index')
            ->with('success', 'Linea Creada con Exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $linea = Linea::find($id);

        return view('linea.show', compact('linea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $linea = Linea::find($id);
        $municipalidad = Municipalidade::pluck('municipio', 'id');

        return view('linea.edit', compact('linea', 'municipalidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LineaRequest $request, Linea $linea)
    {
        $linea->update($request->validated());

        return redirect()->route('lineas.index')
            ->with('success', 'Linea Actualizada con Exito.');
    }

    public function destroy($id)
    {
        Linea::find($id)->delete();

        return redirect()->route('lineas.index')
            ->with('success', 'Linea Eliminada con Exito.');
    }
}

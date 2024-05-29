<?php

namespace App\Http\Controllers;

use App\Models\Piloto;
use App\Http\Requests\PilotoRequest;
use App\Models\Municipalidade;

/**
 * Class PilotoController
 * @package App\Http\Controllers
 */
class PilotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pilotos = Piloto::paginate();

        return view('piloto.index', compact('pilotos'))
            ->with('i', (request()->input('page', 1) - 1) * $pilotos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $piloto = new Piloto();
        $municipalidad = Municipalidade::pluck('municipio','id');
        return view('piloto.create', compact('piloto', 'municipalidad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PilotoRequest $request)
    {
        Piloto::create($request->validated());

        return redirect()->route('pilotos.index')
            ->with('success', 'Piloto Creado con Exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $piloto = Piloto::find($id);

        return view('piloto.show', compact('piloto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $piloto = Piloto::find($id);
        $municipalidad = Municipalidade::pluck('municipio','id');

        return view('piloto.edit', compact('piloto', 'municipalidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PilotoRequest $request, Piloto $piloto)
    {
        $piloto->update($request->validated());

        return redirect()->route('pilotos.index')
            ->with('success', 'Piloto Actualizado con Exito.');
    }

    public function destroy($id)
    {
        Piloto::find($id)->delete();

        return redirect()->route('pilotos.index')
            ->with('success', 'Piloto Eliminado con Exito.');
    }
}

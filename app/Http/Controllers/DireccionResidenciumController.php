<?php

namespace App\Http\Controllers;

use App\Models\DireccionResidencium;
use App\Http\Requests\DireccionResidenciumRequest;
use App\Models\Piloto;

/**
 * Class DireccionResidenciumController
 * @package App\Http\Controllers
 */
class DireccionResidenciumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $direccionResidencia = DireccionResidencium::paginate();

        return view('direccion-residencium.index', compact('direccionResidencia'))
            ->with('i', (request()->input('page', 1) - 1) * $direccionResidencia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $direccionResidencium = new DireccionResidencium();
        $pilotos = Piloto::pluck('nombre', 'id');
        return view('direccion-residencium.create', compact('direccionResidencium', 'pilotos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DireccionResidenciumRequest $request)
    {
        DireccionResidencium::create($request->validated());

        return redirect()->route('direccion-residencia.index')
            ->with('success', 'Direccion de Residencia Creado con Exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $direccionResidencium = DireccionResidencium::find($id);

        return view('direccion-residencium.show', compact('direccionResidencium'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $direccionResidencium = DireccionResidencium::find($id);
        $pilotos = Piloto::pluck('nombre', 'id');

        return view('direccion-residencium.edit', compact('direccionResidencium', 'pilotos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DireccionResidenciumRequest $request, DireccionResidencium $direccionResidencium)
    {
        $direccionResidencium->update($request->validated());

        return redirect()->route('direccion-residencia.index')
            ->with('success', 'Direccion de Residencia Actualizado con Exito');
    }

    public function destroy($id)
    {
        DireccionResidencium::find($id)->delete();

        return redirect()->route('direccion-residencia.index')
            ->with('success', 'Direccion de Residencia Eliminado con Exito');
    }
}

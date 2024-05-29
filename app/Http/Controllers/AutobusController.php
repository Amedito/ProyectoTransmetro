<?php

namespace App\Http\Controllers;

use App\Models\Autobus;
use App\Http\Requests\AutobusRequest;
use App\Models\Linea;
use App\Models\Parqueo;
use App\Models\Piloto;

/**
 * Class AutobusController
 * @package App\Http\Controllers
 */
class AutobusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autobuses = Autobus::paginate();

        return view('autobus.index', compact('autobuses'))
            ->with('i', (request()->input('page', 1) - 1) * $autobuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autobus = new Autobus();

        $linea = Linea::pluck('nombre', 'id');
        $piloto = Piloto::pluck('nombre', 'id');
        $parqueo = Parqueo::pluck('numero', 'id');

        return view('autobus.create', compact('autobus', 'linea', 'piloto', 'parqueo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AutobusRequest $request)
    {
        Autobus::create($request->validated());

        return redirect()->route('autobuses.index')
            ->with('success', 'Autobus Creado con Exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $autobus = Autobus::find($id);

        return view('autobus.show', compact('autobus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $autobus = Autobus::find($id);

        $linea = Linea::pluck('nombre', 'id');
        $piloto = Piloto::pluck('nombre', 'id');
        $parqueo = Parqueo::pluck('numero', 'id');

        return view('autobus.edit', compact('autobus', 'linea', 'piloto', 'parqueo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AutobusRequest $request, Autobus $autobus)
    {
        $autobus->update($request->validated());

        return redirect()->route('autobuses.index')
            ->with('success', 'Autobus Actualizado con Exito.');
    }

    public function destroy($id)
    {
        Autobus::find($id)->delete();

        return redirect()->route('autobuses.index')
            ->with('success', 'Autobus Eliminado con Exito.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Parqueo;
use App\Http\Requests\ParqueoRequest;

/**
 * Class ParqueoController
 * @package App\Http\Controllers
 */
class ParqueoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parqueos = Parqueo::paginate();

        return view('parqueo.index', compact('parqueos'))
            ->with('i', (request()->input('page', 1) - 1) * $parqueos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parqueo = new Parqueo();
        return view('parqueo.create', compact('parqueo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParqueoRequest $request)
    {
        Parqueo::create($request->validated());

        return redirect()->route('parqueos.index')
            ->with('success', 'Parqueo Creado con Exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $parqueo = Parqueo::find($id);

        return view('parqueo.show', compact('parqueo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $parqueo = Parqueo::find($id);

        return view('parqueo.edit', compact('parqueo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ParqueoRequest $request, Parqueo $parqueo)
    {
        $parqueo->update($request->validated());

        return redirect()->route('parqueos.index')
            ->with('success', 'Parqueo Actualizado con Exito.');
    }

    public function destroy($id)
    {
        Parqueo::find($id)->delete();

        return redirect()->route('parqueos.index')
            ->with('success', 'Parqueo Eliminado con Exito.');
    }
}

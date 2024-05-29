<?php

namespace App\Http\Controllers;

use App\Models\Operadore;
use App\Http\Requests\OperadoreRequest;

/**
 * Class OperadoreController
 * @package App\Http\Controllers
 */
class OperadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $operadores = Operadore::paginate();

        return view('operadore.index', compact('operadores'))
            ->with('i', (request()->input('page', 1) - 1) * $operadores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $operadore = new Operadore();
        return view('operadore.create', compact('operadore'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OperadoreRequest $request)
    {
        Operadore::create($request->validated());

        return redirect()->route('operadores.index')
            ->with('success', 'Operador de Estacion Creado con Exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $operadore = Operadore::find($id);

        return view('operadore.show', compact('operadore'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $operadore = Operadore::find($id);

        return view('operadore.edit', compact('operadore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OperadoreRequest $request, Operadore $operadore)
    {
        $operadore->update($request->validated());

        return redirect()->route('operadores.index')
            ->with('success', 'Operador de Estacion Actualizado con Exito.');
    }

    public function destroy($id)
    {
        Operadore::find($id)->delete();

        return redirect()->route('operadores.index')
            ->with('success', 'Operador de Estacion Eliminado con Exito.');
    }
}

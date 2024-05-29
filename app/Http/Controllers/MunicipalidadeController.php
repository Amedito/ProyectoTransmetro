<?php

namespace App\Http\Controllers;

use App\Models\Municipalidade;
use App\Http\Requests\MunicipalidadeRequest;

/**
 * Class MunicipalidadeController
 * @package App\Http\Controllers
 */
class MunicipalidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $municipalidades = Municipalidade::paginate();

        return view('municipalidade.index', compact('municipalidades'))
            ->with('i', (request()->input('page', 1) - 1) * $municipalidades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $municipalidade = new Municipalidade();
        return view('municipalidade.create', compact('municipalidade'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MunicipalidadeRequest $request)
    {
        Municipalidade::create($request->validated());

        return redirect()->route('municipalidades.index')
            ->with('success', 'Municipalidad creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $municipalidade = Municipalidade::find($id);

        return view('municipalidade.show', compact('municipalidade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $municipalidade = Municipalidade::find($id);

        return view('municipalidade.edit', compact('municipalidade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MunicipalidadeRequest $request, Municipalidade $municipalidade)
    {
        $municipalidade->update($request->validated());

        return redirect()->route('municipalidades.index')
            ->with('success', 'Municipalidad actualizada con exito.');
    }

    public function destroy($id)
    {
        Municipalidade::find($id)->delete();

        return redirect()->route('municipalidades.index')
            ->with('success', 'Municipalidad Eliminada Con Exito.');
    }
}

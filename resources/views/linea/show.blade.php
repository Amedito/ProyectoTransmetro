@extends('layouts.app')

@section('template_title')
    {{ $linea->name ?? __('Show') . " " . __('Linea') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Detalles de la Linea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('lineas.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Municipio:</strong>
                            {{ $linea->municipalidad->municipio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $linea->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Zona:</strong>
                            {{ $linea->zona }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Distancia Total en Km:</strong>
                            {{ $linea->distancia_total_km }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

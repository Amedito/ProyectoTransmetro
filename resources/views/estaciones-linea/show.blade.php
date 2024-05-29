@extends('layouts.app')

@section('template_title')
    {{ $estacionesLinea->name ?? __('Show') . " " . __('Estaciones Linea') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Detalles de la Orden de Estacion y Linea de Buses</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('estaciones-lineas.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Linea:</strong>
                            {{ $estacionesLinea->linea->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estacion:</strong>
                            {{ $estacionesLinea->estacion->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Orden:</strong>
                            {{ $estacionesLinea->orden }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

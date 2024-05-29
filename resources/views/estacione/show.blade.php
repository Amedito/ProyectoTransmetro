@extends('layouts.app')

@section('template_title')
    {{ $estacione->name ?? __('Show') . " " . __('Estacione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Detalles de la Estacion de Bus</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('estaciones.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Municipio:</strong>
                            {{ $estacione->municipalidad->municipio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Operador:</strong>
                            {{ $estacione->operador->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Guardia:</strong>
                            {{ $estacione->guardia->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $estacione->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Direccion:</strong>
                            {{ $estacione->direccion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Capacidad Actual:</strong>
                            {{ $estacione->capacidad_actual }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Alerta:</strong>
                            {{ $estacione->alerta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

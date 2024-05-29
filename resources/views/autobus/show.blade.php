@extends('layouts.app')

@section('template_title')
    {{ $autobus->name ?? __('Show') . " " . __('Autobus') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Detalles del Autobus</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('autobuses.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre de la Linea:</strong>
                            {{ $autobus->linea->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre del Piloto:</strong>
                            {{ $autobus->piloto->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Numero de Parqueo:</strong>
                            {{ $autobus->parqueo->numero }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Marca:</strong>
                            {{ $autobus->marca }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Modelo:</strong>
                            {{ $autobus->modelo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Placa:</strong>
                            {{ $autobus->placa }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Capacidad Maxima:</strong>
                            {{ $autobus->capacidad_maxima }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tiempo Espera Adicional Minutos:</strong>
                            {{ $autobus->tiempo_espera_adicional_minutos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('template_title')
    {{ $guardiasSeguridad->name ?? __('Show') . " " . __('Guardias Seguridad') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Detalles del Guardia de Seguridad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('guardias-seguridads.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $guardiasSeguridad->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Apellido:</strong>
                            {{ $guardiasSeguridad->apellido }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Edad:</strong>
                            {{ $guardiasSeguridad->edad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

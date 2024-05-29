@extends('layouts.app')

@section('template_title')
    {{ $historialEducativo->name ?? __('Show') . " " . __('Historial Educativo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Detalles del Historial Educativo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('historial-educativos.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre del Piloto:</strong>
                            {{ $historialEducativo->piloto->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nivel Educativo:</strong>
                            {{ $historialEducativo->nivel_educativo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Institucion:</strong>
                            {{ $historialEducativo->institucion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Año de Graduacion:</strong>
                            {{ $historialEducativo->año_graduacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

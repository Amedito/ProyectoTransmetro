@extends('layouts.app')

@section('template_title')
    {{ $direccionResidencium->name ?? __('Show') . " " . __('Direccion Residencium') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Detalles de la Direccion Residencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('direccion-residencia.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre del Piloto:</strong>
                            {{ $direccionResidencium->piloto->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Direccion:</strong>
                            {{ $direccionResidencium->direccion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Ciudad:</strong>
                            {{ $direccionResidencium->ciudad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Codigo Postal:</strong>
                            {{ $direccionResidencium->codigo_postal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

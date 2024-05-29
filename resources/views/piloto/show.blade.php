@extends('layouts.app')

@section('template_title')
    {{ $piloto->name ?? __('Show') . " " . __('Piloto') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Detalles del Piloto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pilotos.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $piloto->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Apellidos:</strong>
                            {{ $piloto->apellido }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha de Nacimiento:</strong>
                            {{ $piloto->fecha_nacimiento }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Genero:</strong>
                            {{ $piloto->genero }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Municipalidad:</strong>
                            {{ $piloto->municipalidades->municipio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

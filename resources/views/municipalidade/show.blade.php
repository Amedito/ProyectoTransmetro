@extends('layouts.app')

@section('template_title')
    {{ $municipalidade->name ?? __('Show') . " " . __('Municipalidade') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Detalles de la Municipalidad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('municipalidades.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Departamento:</strong>
                            {{ $municipalidade->departamento }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Municipio:</strong>
                            {{ $municipalidade->municipio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

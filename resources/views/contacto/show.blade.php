@extends('layouts.app')

@section('template_title')
    {{ $contacto->name ?? __('Show') . " " . __('Contacto') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Detalles del Contacto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('contactos.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre del Piloto:</strong>
                            {{ $contacto->piloto->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Telefono:</strong>
                            {{ $contacto->telefono }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Correo Electronico:</strong>
                            {{ $contacto->correo }}
                        </div> 

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

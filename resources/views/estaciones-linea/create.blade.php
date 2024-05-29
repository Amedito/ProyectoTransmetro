@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Estaciones Linea
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Orden de Estacion y Linea de Buses</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('estaciones-lineas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('estaciones-linea.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

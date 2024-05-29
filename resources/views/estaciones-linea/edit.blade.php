@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Estaciones Linea
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Orden de Estacion y Linea de Buses</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('estaciones-lineas.update', $estacionesLinea->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('estaciones-linea.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

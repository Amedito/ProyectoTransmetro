@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Estacione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Nueva Estacion de Bus</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('estaciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('estacione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

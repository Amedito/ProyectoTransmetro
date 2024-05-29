@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Direccion Residencium
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Direccion de Recidencia</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('direccion-residencia.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('direccion-residencium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

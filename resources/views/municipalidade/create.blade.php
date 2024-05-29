@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Municipalidade
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Nuevo</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('municipalidades.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('municipalidade.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Linea
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Linea de Transmetro</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('lineas.update', $linea->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('linea.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

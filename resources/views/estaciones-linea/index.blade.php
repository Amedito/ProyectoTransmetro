@extends('layouts.app')

@section('template_title')
    Estaciones Linea
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Orden de Estaciones y Lineas de Buses
                            </span>

                             <div class="float-right">
                                <a href="{{ route('estaciones-lineas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  Crear Nueva
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Linea</th>
										<th>Estacion</th>
										<th>Orden</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estacionesLineas as $estacionesLinea)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estacionesLinea->linea->nombre }}</td>
											<td>{{ $estacionesLinea->estacion->nombre }}</td>
											<td>{{ $estacionesLinea->orden }}</td>

                                            <td>
                                                <form id="delete-form-{{ $estacionesLinea->id }}" action="{{ route('estaciones-lineas.destroy',$estacionesLinea->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estaciones-lineas.show',$estacionesLinea->id) }}"><i class="fa fa-fw fa-eye"></i>Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estaciones-lineas.edit',$estacionesLinea->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDeletion({{ $estacionesLinea->id }})"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $estacionesLineas->links() !!}
            </div>
        </div>
    </div>

    <script>
        function confirmDeletion(id) {
            Swal.fire({
                title: '¿Está seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>
@endsection

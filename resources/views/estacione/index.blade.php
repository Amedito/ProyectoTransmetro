@extends('layouts.app')

@section('template_title')
    Estacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Estaciones de Bus
                            </span>

                             <div class="float-right">
                                <a href="{{ route('estaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Municipio</th>
										<th>Operador</th>
										<th>Guardia</th>
										<th>Nombre</th>
										<th>Direccion</th>
										<th>Capacidad Actual</th>
										<th>Alerta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estaciones as $estacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estacione->municipalidad->municipio }}</td>
											<td>{{ $estacione->operador->nombre }}</td>
											<td>{{ $estacione->guardia->nombre }}</td>
											<td>{{ $estacione->nombre }}</td>
											<td>{{ $estacione->direccion }}</td>
											<td>{{ $estacione->capacidad_actual }}</td>
											<td>{{ $estacione->alerta }}</td>

                                            <td>
                                                <form id="delete-form-{{ $estacione->id }}" action="{{ route('estaciones.destroy',$estacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estaciones.show',$estacione->id) }}"><i class="fa fa-fw fa-eye"></i>Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estaciones.edit',$estacione->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDeletion({{ $estacione->id }})"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $estaciones->links() !!}
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

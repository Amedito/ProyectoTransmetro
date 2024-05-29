@extends('layouts.app')

@section('template_title')
    Autobus
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Autobuses
                            </span>

                             <div class="float-right">
                                <a href="{{ route('autobuses.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  Crear Nuevo
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
                                        
										<th>Nombre de la Linea</th>
										<th>Nombre del Piloto</th>
										<th>Numero de Parqueo</th>
										<th>Marca</th>
										<th>Modelo</th>
										<th>Placa</th>
										<th>Capacidad Maxima</th>
										<th>Tiempo Espera Adicional en Minutos</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($autobuses as $autobus)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $autobus->linea->nombre }}</td>
											<td>{{ $autobus->piloto->nombre }}</td>
											<td>{{ $autobus->parqueo->numero }}</td>
											<td>{{ $autobus->marca }}</td>
											<td>{{ $autobus->modelo }}</td>
											<td>{{ $autobus->placa }}</td>
											<td>{{ $autobus->capacidad_maxima }}</td>
											<td>{{ $autobus->tiempo_espera_adicional_minutos }}</td>

                                            <td>
                                                <form id="delete-form-{{ $autobus->id }}" action="{{ route('autobuses.destroy',$autobus->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('autobuses.show',$autobus->id) }}"><i class="fa fa-fw fa-eye"></i>Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('autobuses.edit',$autobus->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDeletion({{ $autobus->id }})"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $autobuses->links() !!}
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

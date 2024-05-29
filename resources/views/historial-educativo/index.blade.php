@extends('layouts.app')

@section('template_title')
    Historial Educativo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Historial Educativo
                            </span>

                             <div class="float-right">
                                <a href="{{ route('historial-educativos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre del Piloto</th>
										<th>Nivel Educativo</th>
										<th>Institucion</th>
										<th>Año Graduacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historialEducativos as $historialEducativo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $historialEducativo->piloto->nombre }}</td>
											<td>{{ $historialEducativo->nivel_educativo }}</td>
											<td>{{ $historialEducativo->institucion }}</td>
											<td>{{ $historialEducativo->año_graduacion }}</td>

                                            <td>
                                                <form id="delete-form-{{ $historialEducativo->id }}"  action="{{ route('historial-educativos.destroy',$historialEducativo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('historial-educativos.show',$historialEducativo->id) }}"><i class="fa fa-fw fa-eye"></i>Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('historial-educativos.edit',$historialEducativo->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDeletion({{ $historialEducativo->id }})"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $historialEducativos->links() !!}
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

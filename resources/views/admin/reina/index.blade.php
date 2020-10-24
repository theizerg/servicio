    @extends('layouts.admin')

    @section('title', 'Dios Reina')
    @section('page_title', 'Listado')
    @section('page_subtitle', 'Listado')

    @section('content')

        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <div class="btn-group">
                @can('add_users')
                <a href="{{ url('reina/create') }}" class="btn btn btn-danger"><i class="fa fa-plus-square"></i> Ingresar</a>
                @endcan
                
                </div>
            </div>
            </div>
        <br>
        <div class="card card-danger card-outline">
                <div class=" card-header">
                <h3 class="card-title">Datos del consejo comunal <small class="red-text float-right">Dios Reina</small></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Cédula</th>
                    <th>Nro.Familia</th>
                    <th>Nro.Edificio</th>
                    <th>Edificio</th>
                    <th>Nota</th>
                    <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($reinas as $reina)
                    <tr class="row{{ $reina->id }}">
                    <td>{{ $reina->id }}</td>
                    <td>{{ $reina->nb_nombres }} {{ $reina->nb_apellidos }}</td>
                    <td>{{ $reina->nu_cedula }}</td>
                    <td>{{ $reina->nro_familia  }}</td>
                    <td>{{ $reina->nro_familia_edificio }}</td>
                    <td>{{ $reina->edificio->nb_edificio }}</td>
                    <td>{{ $reina->edificio->nb_nota }}</td>
                    <td>
                       <a class="btn btn-round blue darken-4" href="{{  url('reina', [$reina->id]) }}"><i class="material-icons" style="color: white;">person</i> Perfil</a>
                       <a class="btn btn-round red darken-4" href="{{ url('reina', [$reina->id, 'edit']) }}"><i class="material-icons" style="color: white;">edit</i> Editar</a>
                    </td>
                    </tr>
                    @endforeach
                    </tr>
                    </tbody>                
                </table>
                </div>
                <!-- /.card-body -->
            </div>
        
        </div>




    @endsection
    @extends('layouts.admin')

    @section('title', 'Comandante')
    @section('page_title', 'Listado')
    @section('page_subtitle', 'Listado')

    @section('content')

        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <div class="btn-group">
                @can('add_users')
                <a href="{{ url('comandante/create') }}" class="btn btn btn-danger"><i class="fa fa-plus-square"></i> Ingresar</a>
                @endcan
                
                </div>
            </div>
            </div>
        <br>
        <div class="card card-danger card-outline">
                <div class=" card-header">
                <h3 class="card-title">Datos del consejo comunal <small class="red-text float-right">Tras los pasos del comandante</small></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body  table-responsive">
                <table id="example" class="table table-striped table-bordered">
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
                    @foreach ($comandante as $reina)
                    <tr class="row{{ $reina->id }}">
                    <td>{{ $reina->id }}</td>
                    <td>{{ $reina->nb_nombres }} {{ $reina->nb_apellidos }}</td>
                    <td>{{ $reina->nu_cedula }}</td>
                    <td>{{ $reina->nro_familia  }}</td>
                    <td>{{ $reina->nro_familia_edificio }}</td>
                    <td>{{ $reina->edificio->nb_edificio }}</td>
                    <td>{{ $reina->nb_nota }}</td>
                    <td>
                      <a class="btn btn-round yellow darken-4" href="{{  url('comandante', [$reina->id,'imprimir']) }}"><i class="material-icons" style="color: white;">print</i> Perfil</a>
                       <a class="btn btn-round blue darken-4" href="{{  url('comandante', [$reina->id]) }}"><i class="material-icons" style="color: white;">person</i> Perfil</a>
                       <a class="btn btn-round red darken-4" href="{{ url('comandante', [$reina->id, 'edit']) }}"><i class="material-icons" style="color: white;">edit</i> Editar</a>
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
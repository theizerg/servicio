    @extends('layouts.admin')

    @section('title', 'Usuarios')
    @section('page_title', 'Usuarios')
    @section('page_subtitle', 'Listado')

    @section('breadcrumb')
        @parent
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ url('user') }}">usuarios</a></li>
        <li class="active">Listado</li>
    @endsection

    @section('content')

        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <div class="btn-group">
                @can('add_users')
                <a href="{{ url('user/create') }}" class="btn btn btn-primary"><i class="fa fa-plus-square"></i> Ingresar</a>
                @endcan
                
                </div>
            </div>
            </div>
        <br>
        <div class="card card-danger card-outline">
                <div class=" card-header">
                <h3 class="card-title">Listado de usuario</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Usuario</th>
                    <th>Tipo</th>
                    <th>Correo electrónico</th>
                    <th>Acceso</th>
                    <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                    <tr class="row{{ $user->id }}">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }} {{ $user->last_name }}</td>
                    <td>{!! $user->hasRole('administrador') ? '<b>Administrador</b>' : 'votante' !!}</td>
                    <td>{{ $user->email  }}</td>
                    <td><span class="badge {{ $user->status ? 'green' : 'red' }}">{{ $user->display_status }}</span></td>
                    <td>
                       <a class="btn btn-round blue darken-4" href="{{  url('user', [$user->encode_id]) }}"><i class="material-icons" style="color: white;">person</i> Perfil</a>
                       <a class="btn btn-round red darken-4" href="{{ url('user', [$user->encode_id, 'edit']) }}"><i class="material-icons" style="color: white;">edit</i> Editar</a>
                       <a class="btn btn-round green darken-4" href="{{ url('logins', [$user->encode_id]) }}"><i class="material-icons" style="color: white;">assessment</i> Logins</a>
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
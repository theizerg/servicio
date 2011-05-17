    @extends('layouts.admin')

    @section('title', 'Dios Reina')
    @section('page_title', 'Listado')
    @section('page_subtitle', 'Datos del miembro del consejo comunal')

    @section('content')

    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <div class="btn-group">
            @can('add_users')
            <a href="{{ url('reina') }}" class="btn btn-danger"><i class="fas fa-sort-alpha-down-alt"></i> Listado</a>
            @endcan
            @can('add_users')
            <a href="{{ url('reina/create') }}" class="btn btn-danger"><i class="fa fa-plus-square"></i> Ingresar</a>
            @endcan
            </div>
        </div>
        </div>
    <br>
    <div class="card">
        <div class="col-xs-12">
            <div class=" card-header">
            <h2 class="card-title">
                <i class="fa fa-user"></i> Datos de usuario
                <small class="float-right red-text">{{ $reina->nb_nombres }} {{ $reina->nb_apellidos }}</small>
            </h2>
         </div>
            <div class="row card-body">
               <div class="col-sm-3">
                <strong>Nombre completo</strong><br>
                {{ $reina->nb_nombres }} {{ $reina->nb_apellidos }}
              </div>
               <div class="col-sm-3">
                 <strong>Cédula</strong>
                 <br>
                 {{ $reina->identidicacion->nb_tipo_identificacion }}- {{ $reina->nu_cedula }}
               </div>
               <div class="col-sm-3">
                 <strong>Nro de familia</strong>
                 <br>
                 {{ $reina->nro_familia }}
               </div>
               <div class="col-sm-3">
                 <strong>Nro de edificio por familia</strong>
                 <br>
                 {{ $reina->nro_familia_edificio }}
               </div>
               <div class="col-sm-3 mt-3">
                 <strong>Edad</strong>
                 <br>
                 {{ $reina->nu_edad }}
               </div>
               <div class="col-sm-3 mt-3">
                 <strong>Fecha de nacimiento</strong>
                 <br>
                 {{ $reina->fe_nacimiento }}
               </div>
               <div class="col-sm-3 mt-3">
                 <strong>Nacionalidad</strong>
                 <br>
                 {{ $reina->nacionalidad->nb_nacionalidad }}
               </div>
               <div class="col-sm-3 mt-3">
                 <strong>Género</strong>
                 <br>
                 {{ $reina->genero->nb_genero }}
               </div>
                <div class="col-sm-3 mt-3">
                 <strong>Parentezco</strong>
                 <br>
                 {{ $reina->parentezco->nb_parentezco }}
               </div>
               <div class="col-sm-3 mt-3">
                 <strong>Edificio</strong>
                 <br>
                 {{ $reina->edificio->nb_edificio }}
               </div>
               <div class="col-sm-3 mt-3">
                 <strong>Estado Civil</strong>
                 <br>
                 {{ $reina->estadocivil->nb_estado_civil }}
               </div><br>
               <div class="col-sm-12 mt-3">
                 <strong>Nota</strong>
                 <br>
                 {{ $reina->nb_nota }}
               </div>
            </div>
         </div>
    </div>
   
    


    @endsection
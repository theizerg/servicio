    @extends('layouts.admin')

    @section('title', 'maria')
    @section('page_title', 'Listado')
    @section('page_subtitle', 'Datos del miembro del consejo comunal')

    @section('content')

    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <div class="btn-group">
            @can('add_users')
            <a href="{{ url('maria') }}" class="btn btn-danger"><i class="fas fa-sort-alpha-down-alt"></i> Listado</a>
            @endcan
            @can('add_users')
            <a href="{{ url('maria/create') }}" class="btn btn-danger"><i class="fa fa-plus-square"></i> Ingresar</a>
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
                <small class="float-right red-text">{{ $maria->nb_nombres }} {{ $maria->nb_apellidos }}</small>
            </h2>
         </div>
            <div class="row card-body">
               <div class="col-sm-3">
                <strong>Nombre completo</strong><br>
                {{ $maria->nb_nombres }} {{ $maria->nb_apellidos }}
              </div>
               <div class="col-sm-3">
                 <strong>Cédula</strong>
                 <br>
                 {{ $maria->identidicacion->nb_tipo_identificacion }}- {{ $maria->nu_cedula }}
               </div>
               <div class="col-sm-3">
                 <strong>Nro de familia</strong>
                 <br>
                 {{ $maria->nro_familia }}
               </div>
               <div class="col-sm-3">
                 <strong>Nro de edificio por familia</strong>
                 <br>
                 {{ $maria->nro_familia_edificio }}
               </div>
               <div class="col-sm-3 mt-3">
                 <strong>Edad</strong>
                 <br>
                 {{ $maria->nu_edad }}
               </div>
               <div class="col-sm-3 mt-3">
                 <strong>Fecha de nacimiento</strong>
                 <br>
                 {{ $maria->fe_nacimiento }}
               </div>
               <div class="col-sm-3 mt-3">
                 <strong>Nacionalidad</strong>
                 <br>
                 {{ $maria->nacionalidad->nb_nacionalidad }}
               </div>
               <div class="col-sm-3 mt-3">
                 <strong>Género</strong>
                 <br>
                 {{ $maria->genero->nb_genero }}
               </div>
                <div class="col-sm-3 mt-3">
                 <strong>Parentezco</strong>
                 <br>
                 {{ $maria->parentezco->nb_parentezco }}
               </div>
               <div class="col-sm-3 mt-3">
                 <strong>Edificio</strong>
                 <br>
                 {{ $maria->edificio->nb_edificio }}
               </div>
               <div class="col-sm-3 mt-3">
                 <strong>Estado Civil</strong>
                 <br>
                 {{ $maria->estadocivil->nb_estado_civil }}
               </div><br>
               <div class="col-sm-12 mt-3">
                 <strong>Nota</strong>
                 <br>
                 {{ $maria->nb_nota }}
               </div>
               <div class="col-md-12">
                 <h3 class="text-center">
                   Beneficios sociales gubernamentales
                 </h3>
               </div>
              <div class="col-sm-4 mt-3">
                <strong>
                  ¿Recibe bonos de la patria?
                </strong><br>
                  <span class="badge {{ $maria->benf_bono_patria ? 'green' : 'red' }}">{{ $maria->display_bono }}</span>
              </div>
              <div class="col-sm-4 mt-3">
                <strong>
                  ¿Recibe la bolsa del CLAP?
                </strong><br>
                  <span class="badge {{ $maria->benf_bolsas_clap ? 'green' : 'red' }}">{{ $maria->display_clap }}</span>
              </div>
              <div class="col-sm-4 mt-3">
                <strong>
                  ¿Recibe el bono de HOGARES DE LA PATRIA?
                </strong><br>
                   <span class="badge {{ $maria->benf_hogares_patria ? 'green' : 'red' }}">{{ $maria->display_hogares }}</span>
              </div>
              <div class="col-sm-3 mt-3">
                <strong>
                  ¿Está en estado de desnutrición?
                </strong><br>
                   <span class="badge {{ $maria->benf_bolsas_nutricion ? 'green' : 'red' }}">{{ $maria->display_desnutricion }}</span>
              </div>
              <div class="col-sm-3 mt-3">
                <strong>
                 ¿Recibe la bolsa de NUTRICIÓN?
                </strong><br>
                   <span class="badge {{ $maria->benf_estado_desnutricion ? 'green' : 'red' }}">{{ $maria->display_desbolsa }}</span>
              </div>
               <div class="col-sm-3 mt-3">
                <strong>
                 ¿Recibe Gas comunal?
                </strong><br>
                   <span class="badge {{ $maria->benf_bombonas_gas ? 'green' : 'red' }}">{{ $maria->display_gas }}</span>
              </div>
               <div class="col-sm-3 mt-3">
                <strong>
                 Cantidad de bombonas
                </strong><br>
                   <span> {{ $maria->nu_cantidad_bombonas }}</span>
              </div>
            </div>
         </div>
    </div>
   
    


    @endsection
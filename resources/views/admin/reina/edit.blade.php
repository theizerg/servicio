@extends('layouts.admin')

@section('title', 'Dios Reina')
@section('page_title', 'Editar los datos generados')
@section('page_subtitle', 'Ingresar')

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
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="title red-text text-center mt-4">
            Datos para el consejo comunal
          </div>
           {!! Form::model($reina,  ['route' => ['reina.update',$reina->id],'id'=>'main-form' ,'method' => 'PUT'])!!}
           <div class="card-body">
             <div class="row form-group">
               @include('admin.reina.partials.nuevo')
               </div>
             </div>
             <div class="md-form row mb-3">
                  <div class="col-md-12">
                      <button type="submit" class="btn red form-control" id="boton">
                          <i class="fas fa-save text-white" id="ajax-icon"></i> <span class="text-white ml-3">{{ __('Guardar') }}</span>
                      </button> 
                                              
                  </div>
              </div>
            {!! Form::close()!!}
           </div> 
        </div>
      </div>
    </div>
  @endsection
@push('scripts')
<script type="text/javascript">
$(document).ready(function () {

  $('#main-form').validate({
    rules: {
      nb_nombres: {
        required: true,
        minlength: 2,
      },
      nb_apellidos: {
        required: true,
        minlength: 2
      },
      nu_cedula: {
        required: true,
        number: true
      },
      nro_familia: {
        required: true,
         number: true
      },
      nro_familia_edificio: {
        required: true,
         number: true,

      },
      nu_edad: {
         required: true,
         number: true,

      },
      identificacion_id: {
        required: true,
         number: true,

      },
      fe_nacimiento: {
        required: true
      },
       nacionalidad_id: {
        required: true
      },
       genero_id: {
        required: true
      },
       parentezco_id: {
        required: true
      },
       edificio_id: {
        required: true
      },
       estado_civil_id: {
        required: true
      },
       nb_nota: {
        required: true
      },
    },
    messages: {
      nb_nombres: {
        required: "Ingrese el nombre",
         minlength: "Debe tener un mínimo de 1 caracteres",

      },
       nb_apellidos: {
        required: "Ingrese el apellido",
         minlength: "Debe tener un mínimo de 1 caracteres",

      },
      nu_cedula: {
        required: "Ingrese la cédula",
        minlength: "Debe tener un mínimo de 1 caracteres"
      },
      nro_familia: {
        required: "Ingrese el numero de la familia",
        minlength: "Debe tener un mínimo de 1 caracteres"
      },
      nro_familia_edificio: {
        required: "Ingrese el numero por edificio",
        minlength: "Debe tener un mínimo de 1 caracteres"
      },
       nu_edad: {
        required: "Ingresa la edad",
        minlength: "Debe tener un mínimo de 1 caracteres",
      },
       identificacion_id: {
        required: "Selecciona",
        minlength: "Debe tener un mínimo de 1 caracteres",
      },
      fe_nacimiento: {
        required: "Ingresa la fecha de nacimiento"

      },
      nacionalidad_id: {
        required: "Selecciona la nacionalidad",
        minlength: "Debe tener un mínimo de 1 caracteres"
      },
      genero_id: {
        required: "Selecciona el genero",
        minlength: "Debe tener un mínimo de 1 caracteres"
      },
      parentezco_id: {
        required: "Selecciona el parentezco",
        minlength: "Debe tener un mínimo de 1 caracteres"
      },
       edificio_id: {
        required: "Selecciona el edificio",
        minlength: "Debe tener un mínimo de 1 caracteres",
      },
       estado_civil_id: {
        required: "Selecciona el estado civil",
        minlength: "Debe tener un mínimo de 1 caracteres",
      },
      nb_nota: {
        required: "Ingresa alguna nota"

      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });

});
</script>

<script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
</script>
<script>
  $(document).ready(function(){

   $("#benf_bombonas_gas").val() == 0;

   $("#bombonas").hide();


    $("#benf_bombonas_gas").on('change', function(){
        if($("#benf_bombonas_gas").val() == 1){
          $("#bombonas").show();
          $("#bombonas").val(1);
        } else {
           $("#bombonas").show();
           $("#bombonas").val(0);
        }
      });
      
});
</script>
@endpush
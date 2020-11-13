
<div class="col-md-4">
	<div class="form-group">
       <label class="">Nombres</label><br>
        {!! Form::text('nb_nombres', null,array('class' => 'form-control input-sm','placeholder'=>'Nombres','id'=>'nb_nombres')) !!}
    </div>
</div>

<div class="col-md-4">
	<div class="form-group">
	  <label class="">Apellidos</label><br>
   {!! Form::text('nb_apellidos', null,array('class' => 'form-control input-sm','placeholder'=>'Apellidos','id'=>'nb_apellidos')) !!}
   </div>
</div>

<div class="col-md-2" style="margin-top: 0.50rem !important;"><br>
	<div class="form-group">
		<select id="selectFamiliaProducto" class="form-control" name="identificacion_id" required="true" style="width: 170px;">
			@foreach( $tipoI as $f)
				<option value="{{ $f->id}}">{{ $f->nb_tipo_identificacion }}</option>
			@endforeach
		</select>
	</div>
</div>
<div class="col-md-2">
	<div class="form-group">
	  <label class="">Cédula</label><br>
	{!! Form::text('nu_cedula', null,array('class' => 'form-control input-sm','placeholder'=>'Cédula','id'=>'nu_cedula')) !!}
  </div>
</div>
<div class="col-md-4 mt-2">
	<div class="form-group">
	  <label class="">Número de familia</label><br>
	{!! Form::number('nro_familia', null,array('class' => 'form-control input-sm','placeholder'=>'Número de familia','id'=>'nro_familia')) !!}
	</div>
</div>
<div class="col-md-4 mt-2">
  <div class="form-group">
	<label class="">Familias por edificio</label><br>
	{!! Form::number('nro_familia_edificio', null,array('class' => 'form-control input-sm','placeholder'=>'Familias por edificio','id'=>'nro_familia_edificio')) !!}
	</div>
</div>
<div class="col-md-4 mt-2">
	<div class="form-group">
	  <label class="">Edad</label><br>
	{!! Form::number('nu_edad', null,array('class' => 'form-control input-sm','placeholder'=>'Edad','id'=>'nu_edad')) !!}
	</div>
</div>
<div class="col-md-4 mt-2">
	<label class="">Nacionalidad</label><br>
	  <div class="form-group">
		<select id="nacionalidad_id" class="form-control" name="nacionalidad_id" required="true">
			<option value="" disabled selected hidden>Seleccione</option>
			@foreach( $nacionalidades as $f)
				<option value="{{ $f->id}}">{{ $f->nb_nacionalidad }}</option>
			@endforeach
		</select>
  </div>
</div>
<div class="col-md-4 mt-2">
	<label class="">Género</label><br>
      <div class="form-group">
		<select id="genero_id" class="form-control" name="genero_id" required="true">
			<option value="" disabled selected hidden>Seleccione</option>
			@foreach( $genero as $f)
				<option value="{{ $f->id}}">{{ $f->nb_genero }}</option>
			@endforeach
		</select>
	</div>
</div>
<div class="col-md-4 mt-2">
  <div class="form-group">
	<label class="">Parentezco</label><br>
	<select id="parentezco_id" class="form-control" name="parentezco_id" required="true">
		<option value="" disabled selected hidden>Seleccione</option>
		@foreach( $parentezco as $f)
			<option value="{{ $f->id}}">{{ $f->nb_parentezco }}</option>
		@endforeach
	</select>
	</div>
</div>
<div class="col-md-4 mt-2">
  <div class="form-group">
	<label class="">Nombre de edificio</label><br>
	<select id="edificio_id" class="form-control" name="edificio_id" required="true">
		<option value="" disabled selected hidden>Seleccione</option>
		@foreach( $edificio as $f)
			<option value="{{ $f->id}}">{{ $f->nb_edificio }}</option>
		@endforeach
	</select>
  </div>
</div>
<div class="col-md-4 mt-2">
  <div class="form-group">
	<label class="">Estado civil</label><br>
	<select id="parentezco_id" class="form-control" name="estado_civil_id" required="true">
		<option value="" disabled selected hidden>Seleccione</option>
		@foreach( $civil as $f)
			<option value="{{ $f->id}}">{{ $f->nb_estado_civil }}</option>
		@endforeach
	</select>
  </div>
</div>
<input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id}}">
<div class="col-md-4 mt-2">
	<div class="form-group">
    <label class="" for="txtFecha">Fecha de nacimiento</label><br>
    {!! Form::date('fe_nacimiento', null,array('class' => 'form-control input-sm','placeholder'=>'Nombres','id'=>'fe_nacimiento')) !!}
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
        <label for="role">¿RECIBE LOS BONOS DE LA PATRIA?</label>
        <div class="checkbox icheck">
          <label>
            <input type="radio" name="benf_bono_patria" value="1" checked> SÍ&nbsp;&nbsp;
            <input type="radio" name="benf_bono_patria" value="0"> NO
          </label>
        </div>
    </div>
</div>
<div class="col-md-4">
	<div class="form-group">
        <label for="benf_bolsas_clap">¿RECIBE LA BOLSA DEL CLAP?</label>
        <div class="checkbox icheck">
          <label>
            <input type="radio" name="benf_bolsas_clap" value="1" checked> SÍ&nbsp;&nbsp;
            <input type="radio" name="benf_bolsas_clap" value="0"> NO
          </label>
        </div>
    </div>
</div>
<div class="col-md-4">
	<div class="form-group">
        <label for="benf_hogares_patria">¿RECIBE EL BONO DE HOGARES DE LA PATRIA?</label>
        <div class="checkbox icheck">
          <label>
            <input type="radio" name="benf_hogares_patria" value="1" checked> SÍ&nbsp;&nbsp;
            <input type="radio" name="benf_hogares_patria" value="0"> NO
          </label>
        </div>
    </div>
</div>
<div class="col-md-4">
	<div class="form-group">
        <label for="benf_bolsas_nutricion">¿RECIBE LA BOLSA DE NUTRICIÓN?</label>
        <div class="checkbox icheck">
          <label>
            <input type="radio" name="benf_bolsas_nutricion" value="1" checked> SÍ&nbsp;&nbsp;
            <input type="radio" name="benf_bolsas_nutricion" value="0"> NO
          </label>
        </div>
    </div>
</div>
<div class="col-md-4">
	<div class="form-group">
        <label for="benf_estado_desnutricion">¿ESTÁ EN ESTADO DE DESNUTRICIÓN?</label>
        <div class="checkbox icheck">
          <label>
            <input type="radio" name="benf_estado_desnutricion" value="1" checked> SÍ&nbsp;&nbsp;
            <input type="radio" name="benf_estado_desnutricion" value="0"> NO
          </label>
        </div>
    </div>
</div>
<div class="col-md-4">
	<div class="form-group">
        <label for="benf_bombonas_gas">¿RECIBE LAS BOMBONAS DEL GAS COMUNAL?</label>
 			<select id="benf_bombonas_gas" class="form-control" name="benf_bombonas_gas">
 				<option       >SELECCIONE</option>
				<option value="1">SÍ</option>
				<option value="0">NO</option>
			</select>
        </div>
    </div>
 <div class="col-md-12">
	<div class="form-group">
        <label >CANTIDAD DE BOMBONAS QUE RECIBE</label>
 			<input class="form-control form-bombonas" id="bombonas" type="number" name="nu_cantidad_bombonas" placeholder="Cantidad de bombonas que recibe" oninvalid="this.setCustomValidity('Debe ingresar una razón social para el cliente')" oninput="setCustomValidity('')">
        </div>
</div>
<div class="col-md-12 mt-3">
  <div class="form-group">
        <label for="status"></label>
        <div class="checkbox icheck">
          <label> ESTADO EN LA COMUNIDAD <br><br>
            <input type="radio" name="status" value="1" checked> ACTIVO&nbsp;&nbsp;
            <input type="radio" name="status" value="0"> INACTIVO
          </label>
        </div>
    </div>
</div>
<div class="col-md-12 mt-2">
   <div class="form-group">
	<label class="" for="txtFecha">Nota</label><br>
	  {!! Form::textarea('nb_nota', null,array('class' => 'form-control input-sm','placeholder'=>'Ingrese alguna nota','id'=>'nb_nota')) !!}
    </div>
 </div>


@push('scripts')

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
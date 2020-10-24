
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
<div class="col-md-12 mt-2">
   <div class="form-group">
	<label class="" for="txtFecha">Nota</label><br>
	  {!! Form::textarea('nb_nota', null,array('class' => 'form-control input-sm','placeholder'=>'Ingrese alguna nota','id'=>'nb_nota')) !!}
    </div>
 </div>

 <button type="submit"></button>
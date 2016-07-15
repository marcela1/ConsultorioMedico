@extends('master')
@section('encabezado')
<h1>Registrar Cita </h1>
@stop
@section('contenido')
<div class="clos-xs-4"></div>
<div class="col-xs-8  " >


				<form action="{{url('/guardarCita')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">
					

				@if(count($errors) > 0)
					<div class="errors">
					<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
					</ul>
					</div>
				@endif
				

					
					<div class="form-group">
						<label for="id_paciente"> ID Paciente </label>
						 <input type="text" class="form-control" name="id_paciente" value="{{old('id_paciente')}}">

					</div>
					<div class="form-group">
						<label for="id_administrador">ID Administrador</label>
						<input type="text" class="form-control" name="id_administrador" value="{{old('id_administrador')}}">

					</div>
					<div class="form-group">
						<label for="descripcion">Descripcion</label>
						<input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}">

					</div>
					<div class="form-group">
						<label for="date">Fecha</label>
						
							<div class="input-group">
                                <input type="text" class="form-control datepicker" name="date" value="{{old('date')}}">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar "></span>
                                </div>
                            </div>

					</div>

					<div class="form-group">
						<label for="hora">Hora</label>
						<input type="time" class="form-control" name="hora" value="{{old('hora')}}">

						

					</div>
					<div class="form-group">
						<label for="consultorio">Consultorio</label>
						<input type="text" class="form-control" name="consultorio" value="{{old('consultorio')}}">
						
					</div>
					
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/')}}" class="btn btn-default"> Cancelar</a>
						</div>

					
				</form>
		<script>
    	$('.datepicker').datepicker({
        format: "yyyy/mm/dd",
        language: "es",
        autoclose: true
    });
</script>
@stop
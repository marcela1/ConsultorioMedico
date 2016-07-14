@extends('master')
@section('encabezado')
<h1>Registrar Cita </h1>
@stop
@section('contenido')
<div class="clos-xs-4"></div>
<div class="col-xs-8  " >
				<form action="{{url('/actualizarCita')}}/{{$cita->id}}" method="POST">
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
						 <input value="{{$cita->id_paciente}}"type="text" class="form-control" name="id_paciente" >

					</div>
					<div class="form-group">
						<label for="id_administrador">ID Administrador</label>
						<input value="{{$cita->id_administrador}}"type="text" class="form-control" name="id_administrador" >

					</div>
					<div class="form-group">
						<label for="descripcion">Descripcion</label>
						<input value="{{$cita->descripcion}}"type="text" class="form-control" name="descripcion" >

					</div>
					<div class="form-group">
						<label for="date">Fecha</label>
						
							<div class="input-group">
                                <input value="{{$cita->fecha}}"type="text" class="form-control datepicker" name="date" >
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar "aria-hidden="true"></span>
                                </div>
                            </div>

					</div>

					<div class="form-group">
						<label for="hora">Hora</label>
						<input value="{{$cita->hora}}"type="time" class="form-control" name="hora" >

						

					</div>
					<div class="form-group">
						<label for="consultorio">Consultorio</label>
						<input value="{{$cita->consultorio}}" type="text" class="form-control" name="consultorio" >
						
					</div>
					
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/mostrarCita')}}" class="btn btn-danger"> Cancelar</a>
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
@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="{{asset("imagenes/edit.png")}}" width="85" height="75" ALIGN="left"><font color="White" face="verdana">Editar Cita</font></h1>
</div>
@stop
@section('contenido')
<center>

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
				

					<div style="width:1200px;height:430px;border:3px solid #8DC0E9;">
					<div P ALIGN=left>
					<div class="form-group, col-xs-12">
						<label for="id_paciente"><b>ID Paciente:</b></label>
						 <input value="{{$cita->id_paciente}}"type="text" class="form-control" name="id_paciente" >

					</div>
					<div class="form-group, col-xs-12">
						<label for="id_administrador"><b>ID Administrador:</b></label>
						<input value="{{$cita->id_administrador}}"type="text" class="form-control" name="id_administrador" >

					</div>
					<div class="form-group, col-xs-12">
						<label for="descripcion"><b>Descripcion:</b></label>
						<input value="{{$cita->descripcion}}"type="text" class="form-control" name="descripcion" >

					</div>
					<div class="form-group, col-xs-12">
						<label for="date"><b>Fecha:</b></label>
						
							<div class="input-group">
                                <input value="{{$cita->fecha}}"type="text" class="form-control datepicker" name="date" >
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar "aria-hidden="true"></span>
                                </div>
                            </div>

					</div>

					<div class="form-group. col-xs-12">
						<label for="hora"><b>Hora:</b></label>
						<input value="{{$cita->hora}}"type="time" class="form-control" name="hora" >

						

					</div>
					<div class="form-group, col-xs-12">
						<label for="consultorio"><b>Consultorio:</b></label>
						<input value="{{$cita->consultorio}}" type="text" class="form-control" name="consultorio" >
						
					</div>

				</div>
				</div>
				<br>
					
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
</center>
@stop
@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="imagenes/registro.png" width="85" height="82" ALIGN="left"><font color="White" face="verdana">Registrar Cita</font></h1>
</div>

@stop
@section('contenido')
<center>



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
				<div style="width:1200px;height:450px;border:3px solid #8DC0E9;">
					<div P ALIGN=left>
                
					<div class="form-group, col-xs-12">
						<label for="id_paciente"><b>Paciente:</b></label>
								<select class="form-control" name="id_paciente" id="">
								<option value=""><font color="White">Seleccione Un Paciente</font></option>
								@foreach($pacientes as $p)
								<option value="{{$p->id}}">{{$p->nombre}}</option>
								@endforeach
								</select>
						
					</div>
					<div class="form-group, col-xs-12">
						<label for="id_administrador"><b>Administrador:</b></label>
								<select class="form-control" name="id_administrador" id="">
								<option value="">Seleccione Un Administrador</option>
								@foreach($administradores as $c)
								<option value="{{$c->id}}">{{$c->nombre}}</option>
								@endforeach
								</select>

					</div>
					<div class="form-group, col-xs-12">
						<label for="descripcion"><b>Descripcion</b></label>
						<input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}">

					</div>
					<div class="form-group, col-xs-12">
						<label for="date"><b>Fecha</b></label>
						
							<div class="input-group">
                                <input type="text" class="form-control datepicker" name="date" value="{{old('date')}}">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar "></span>
                                </div>
                            </div>

					</div>

					<div class="form-group, col-xs-12">
						<label for="hora"><b>Hora</b></label>
						<input type="time" class="form-control" name="hora" value="{{old('hora')}}">

						

					</div>
					<div class="form-group, col-xs-12">
						<label for="consultorio"><b>Consultorio</b></label>
						<input type="text" class="form-control" name="consultorio" value="{{old('consultorio')}}">
						
					</div>
				</div>
				</div>
					
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/')}}" class="btn btn-danger"> Cancelar</a>
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
@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="{{asset("imagenes/edit.png")}}" width="85" height="75" ALIGN="left"><font color="White" face="verdana">Modificar Consulta</font></h1>
</div>

@stop
@section('contenido')
<center>
				<form action="{{url('/actualizarConsulta')}}/{{$consulta->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div style="width:1200px;height:250px;border:3px solid #8DC0E9;">
					<div P ALIGN=left>
					<div class="form-group, col-xs-6">
						<label for="FechaConsulta">Fecha: </label>
						<div class="input-group">
                                <input  value="{{$consulta->fecha}}" type="text" class="form-control datepicker" name="FechaConsulta" >
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar "></span>
                                </div>
                        </div> 
					<br></div>
					<div class="form-group, col-xs-6" >
						<label for="Hora">Hora:</label>
						<input value="{{$consulta->hora}}" type="text" class="form-control" name="Hora">
					</div>
					<div class="form-group, col-xs-12">
						<label for="Nombre"><b>Paciente:</b></label>						
					<select class="form-control" name="Nombre" id="">
								<option value="{{$consulta->id_paciente}}"><font color="White">{{$consulta->nombre}}</font></option>
								@foreach($pacientes as $p)
								<option value="{{$p->id}}">{{$p->nombre}}</option>
								@endforeach
							</select>				
					</div>
					<div class="form-group, col-xs-12">
						<label for="Doctor"><b>Doctor:</b></label>
						
						<select class="form-control" name="Doctor">
							<option value="{{$consulta->id_administrador}}">{{$consulta->doc}}</option></select>		
					</div>
		</div>
	</div>
	<br><div class="jumbotron" style="background: #8DC0E9" >

				<div P ALIGN=left>
					<div class="form-group, col-xs-12">
						<h4><label for="Signos"><font color="White" face="verdana"><b>Signos Vitales:</b></font></label><br></h4>
					<br></div>
				</div>
		</div>
	<div style="width:1200px;height:350px;border:3px solid #8DC0E9;">
		<div P ALIGN=left>
					<div class="form-group, col-xs-4">
						<label for="Peso">Peso:</label>
						<input value="{{$consulta->peso}}" type="text" class="form-control" name="Peso">
					<br></div>
				
					<div class="form-group, col-xs-4">
						<label for="Altura">Altura:</label>
						<input value="{{$consulta->altura}}" type="text" class="form-control" name="Altura">
					<br></div>
					<div class="form-group, col-xs-4">
						<label for="IMC">IMC:</label>
						<input value="{{$consulta->IMC}}" type="text" class="form-control" name="IMC">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Temperatura">Temperatura Corporal:</label>
						<input value="{{$consulta->temperatura_corporal}}" type="text" class="form-control" name="Temperatura">
					<br></div>
					<div class="form-group, col-xs-6">
						<label for="Presion">Presion:</label>
						<input value="{{$consulta->presion}}" type="text" class="form-control" name="Presion">
					<br></div>

					<div class="form-group, col-xs-6">
						<label for="FrecuenciaRespiratoria">Frecuencia Respiratoria:</label>
						<input value="{{$consulta->frecuencia_respiratoria}}" type="text" class="form-control" ID="Seguro" name="FrecuenciaRespiratoria">
					</div>
					<div class="form-group, col-xs-6">
						<label for="FrecuenciaCardiaca">Frecuencia Cardiaca:</label>
						<input value="{{$consulta->frecuencia_cardiaca}}" type="text" class="form-control" name="FrecuenciaCardiaca">
					<br></div>
					<div class="form-group, col-xs-12">
						<label for="AntecedentesFamiliares">Antecedentes Familiares:</label>
						<input value="{{$consulta->antecedentes_familiares}}" type="text" class="form-control" name="AntecedentesFamiliares"><br>
					</div>
		
		</div>
	</div>
	<br><div class="jumbotron" style="background: #8DC0E9" >

				<div P ALIGN=left>
					<div class="form-group, col-xs-12">
						<h4><label for="NotaMedica"><font color="White" face="verdana"><b>Nota Medica</b></font></label></h4>
					</div>
				</div>
		</div>
	<div style="width:1200px;height:350px;border:3px solid #8DC0E9;">
		<div P ALIGN=left>
					<div class="form-group, col-xs-12">
						<label for="Padecimiento">Padecimiento:</label>
						<input value="{{$consulta->padecimientos}}" type="text" class="form-control" name="Padecimiento"><br>
					</div>
					<div class="form-group, col-xs-12">
						<label for="Enfermedad">Clasificacion de Enfermedad:</label>
						<input value="{{$consulta->clasificacion}}" type="text" class="form-control" name="Enfermedad"><br>
					</div>
					<div class="form-group, col-xs-12">
						<label for="Diagnostico">Diagnostico:</label>
						<input value="{{$consulta->diagnostico}}" type="text" class="form-control" name="Diagnostico"><br>
					</div>
					<div class="form-group, col-xs-12">
						<label for="Tratamiento">Tratamiento:</label>
						<input value="{{$consulta->tratamiento}}" type="text" class="form-control" name="Tratamiento"><br>
					</div>
		</div>
	</div>
					<div class="col-xs-12">
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/mostrarConsulta')}}" class="btn btn-danger">Cancelar</a>
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
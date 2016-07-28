@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="imagenes/registro.png" width="85" height="82" ALIGN="left"><font color="White" face="verdana">Registrar Consulta</font></h1>
</div>
@stop
@section('contenido')
<center>
	<div style="width:1200px;height:250px;border:3px solid #8DC0E9;">
		<div P ALIGN=left>
				<form action="{{url('/guardarConsulta')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group, col-xs-6">
						<label for="FechaConsulta"><b>Fecha:</b></label>
						<div class="input-group">
                                <input type="text" class="form-control datepicker" name="FechaConsulta" >
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar "></span>
                                </div>
                        </div> 
					<br></div>
					<div class="form-group, col-xs-6" >
						<label for="Hora"><b>Hora:</b></label>
						<input type="text" class="form-control" name="Hora">
					</div>
					<div class="form-group, col-xs-12">
						<label for="Nombre"><b>Paciente:</b></label>
							<select class="form-control" name="Nombre" id="">
								<option value=""><font color="White">Seleccione Un Paciente</font></option>
								@foreach($pacientes as $p)
								<option value="{{$p->id}}">{{$p->nombre}}</option>
								@endforeach
							</select>					
					</div>
					<div class="form-group, col-xs-12">
						<label for="Doctor"><b>Doctor:</b></label>
							<select class="form-control" name="Doctor" id="">
								<option value=""><font color="White">Seleccione Un Doctor</font></option>
								@foreach($administradores as $a)
								<option value="{{$a->id}}">{{$a->nombre}}</option>
								@endforeach
							</select>	<br>				
					</div>
			</div>
		</div>

		<br><div class="jumbotron" style="background: #8DC0E9" >

				<div P ALIGN=left>
					<div class="form-group, col-xs-12">
						<h4><label for="Signos"><font color="White" face="verdana"><b>Signos Vitales</b></font></label></h4>
					<br></div>
				</div>
			</div>

		<div style="width:1200px;height:350px;border:3px solid #8DC0E9;">
		<div P ALIGN=left>

					<div class="form-group, col-xs-4">
						<label for="Peso"><b>Peso:</b></label>
						<input type="text" class="form-control" name="Peso">
					<br></div>
				
					<div class="form-group, col-xs-4">
						<label for="Altura"><b>Altura:</b></label>
						<input type="text" class="form-control" name="Altura">
					<br></div>
					<div class="form-group, col-xs-4">
						<label for="IMC"><b>IMC:</b></label>
						<input type="text" class="form-control" name="IMC">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Temperatura"><b>Temperatura Corporal:</b></label>
						<input type="text" class="form-control" name="Temperatura">
					<br></div>
					<div class="form-group, col-xs-6">
						<label for="Presion"><b>Presion:</b></label>
						<input type="text" class="form-control" name="Presion">
					<br></div>

					<div class="form-group, col-xs-6">
						<label for="FrecuenciaRespiratoria"><b>Frecuencia Respiratoria:</b></label>
						<input type="text" class="form-control" ID="Seguro" name="FrecuenciaRespiratoria">
					</div>
					<div class="form-group, col-xs-6">
						<label for="FrecuenciaCardiaca"><b>Frecuencia Cardiaca:</b></label>
						<input type="text" class="form-control" name="FrecuenciaCardiaca">
					<br></div>
					<div class="form-group, col-xs-12">
						<label for="AntecedentesFamiliares"><b>Antecedentes Familiares:</b></label>
						<input type="text" class="form-control" name="AntecedentesFamiliares"><br>
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
						<label for="Padecimiento"><b>Padecimiento:</b></label>
						<input type="text" class="form-control" name="Padecimiento"><br>
					</div>
					<div class="form-group, col-xs-12">
						<label for="Enfermedad"><b>Clasificacion de Enfermedad:</b></label>
						<input type="text" class="form-control" name="Enfermedad"><br>
					</div>
					<div class="form-group, col-xs-12">
						<label for="Diagnostico"><b>Diagnostico:</b></label>
						<input type="text" class="form-control" name="Diagnostico"><br>
					</div>
					<div class="form-group, col-xs-12">
						<label for="Tratamiento"><b>Tratamiento:</b></label>
						<input type="text" class="form-control" name="Tratamiento"><br>
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
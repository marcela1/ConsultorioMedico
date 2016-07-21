@extends('master')
@section('encabezado')
<h1>Registrar Consulta</h1>
@stop
@section('contenido')
				<form action="{{url('/guardarConsulta')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group, col-xs-6">
						<label for="FechaConsulta">Fecha: </label>
						<div class="input-group">
                                <input type="text" class="form-control datepicker" name="FechaConsulta" >
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar "></span>
                                </div>
                        </div> 
					<br></div>
					<div class="form-group, col-xs-6" >
						<label for="Hora">Hora:</label>
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
								<option value=""><font color="White">Seleccione Un Paciente</font></option>
								@foreach($administradores as $a)
								<option value="{{$a->id}}">{{$a->nombre}}</option>
								@endforeach
							</select>	<br>				
					</div>
					<div class="form-group, col-xs-12">
						<label for="Signos">Signos Vitales</label><br>
					<br></div>
					<div class="form-group, col-xs-4">
						<label for="Peso">Peso:</label>
						<input type="text" class="form-control" name="Peso">
					<br></div>
				
					<div class="form-group, col-xs-4">
						<label for="Altura">Altura:</label>
						<input type="text" class="form-control" name="Altura">
					<br></div>
					<div class="form-group, col-xs-4">
						<label for="IMC">IMC:</label>
						<input type="text" class="form-control" name="IMC">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Temperatura">Temperatura Corporal:</label>
						<input type="text" class="form-control" name="Temperatura">
					<br></div>
					<div class="form-group, col-xs-6">
						<label for="Presion">Presion:</label>
						<input type="text" class="form-control" name="Presion">
					<br></div>

					<div class="form-group, col-xs-6">
						<label for="FrecuenciaRespiratoria">Frecuencia Respiratoria:</label>
						<input type="text" class="form-control" ID="Seguro" name="FrecuenciaRespiratoria">
					</div>
					<div class="form-group, col-xs-6">
						<label for="FrecuenciaCardiaca">Frecuencia Cardiaca:</label>
						<input type="text" class="form-control" name="FrecuenciaCardiaca">
					<br></div>
					<div class="form-group, col-xs-12">
						<label for="AntecedentesFamiliares">Antecedentes Familiares:</label>
						<input type="text" class="form-control" name="AntecedentesFamiliares"><br>
					</div>
					<div class="form-group, col-xs-12">
						<label for="NotaMedica">Nota Medica:</label> <br><br>
					</div>
					<div class="form-group, col-xs-12">
						<label for="Padecimiento">Padecimiento:</label>
						<input type="text" class="form-control" name="Padecimiento"><br>
					</div>
					<div class="form-group, col-xs-12">
						<label for="Enfermedad">Clasificacion de Enfermedad:</label>
						<input type="text" class="form-control" name="Enfermedad"><br>
					</div>
					<div class="form-group, col-xs-12">
						<label for="Diagnostico">Diagnostico:</label>
						<input type="text" class="form-control" name="Diagnostico"><br>
					</div>
					<div class="form-group, col-xs-12">
						<label for="Tratamiento">Tratamiento:</label>
						<input type="text" class="form-control" name="Tratamiento"><br>
					</div>
					
					<div class="col-xs-12">
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
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
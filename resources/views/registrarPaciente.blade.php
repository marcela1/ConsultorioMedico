@extends('master')
@section('encabezado')
<h1>Registrar Paciente</h1>
@stop
@section('contenido')
				<form action="{{url('/guardarPaciente')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group, col-xs-12">
						<label for="FechaRegistro">Fecha de Registro</label>
						
						<input type="text" class="form-control" name="FechaRegistro">
						<label for="FechaRegistro">Ejemplo: 2016-01-15</label><br>
					<br></div>
					<div class="form-group, col-xs-4" >
						<label for="Nombre">Nombre</label>
						<input type="text" class="form-control" name="Nombre">
					</div>
					<div class="form-group, col-xs-4">
						<label for="ApellidoPat">Apellido Paterno</label>
						<input type="text" class="form-control" name="ApellidoPat">
					</div>
					<div class="form-group, col-xs-4">
						<label for="ApellidoMat">Apellido Materno</label>
						<input type="text" class="form-control" name="ApellidoMat">
					<br></div>
					<div class="form-group, col-xs-6">
						<label for="FechaNacimiento">Fecha de Nacimiento</label>
						<input type="text" class="form-control" name="FechaNacimiento">
					<br></div>
				
					<div class="form-group, col-xs-12">
						<label for="Sexo">Sexo</label>
						<input type="radio" name="Sexo" value="Femenio">Femenino
						<input type="radio" name="Sexo" value="Masculino">Masculino
					<br><br></div>
					<div class="form-group, col-xs-12">
						<label for="EstadoCivil">Estado Civil</label>
						<input type="radio" name="EstadoCivil" value="Soltero">Soltero
						<input type="radio" name="EstadoCivil" value="Casado">Casado
						<input type="radio" name="EstadoCivil" value="Union Libre">Union Libre
						<input type="radio" name="EstadoCivil" value="Viudo">Viudo
						<input type="radio" name="EstadoCivil" value="Otro">Otro
					<br><br></div>
					<div class="form-group, col-xs-6">
						<label for="LugarNacimiento">Lugar de Nacimiento</label>
						<input type="text" class="form-control" name="LugarNacimiento">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Ocupacion">Ocupacion</label>
						<input type="text" class="form-control" name="Ocupacion">
					<br></div>
					<div class="form-group, col-xs-6">
						<label for="TipoSangre">Tipo de Sangre</label>
						<input type="text" class="form-control" name="TipoSangre">
					<br></div>
					
					<div class="form-group, col-xs-12">
						<label for="Seguro">Portador de Seguro Medico: </label>
						SI<input type="radio" name="Seguro" id="si" value="SI">
						NO<input type="radio" name="Seguro" id="no" value="NO">
					<br><br></div>

					<div class="form-group, col-xs-6">
						<label for="SeguroMedico">Nombre del seguro medico</label>
						<input type="text" class="form-control" ID="Seguro" name="SeguroMedico">
					</div>
					<div class="form-group, col-xs-6">
						<label for="CURP">CURP (Clave Unica de Registro de Poblacion)</label>
						<input type="text" class="form-control" name="CURP">
					<br></div>
					<div class="form-group, col-xs-12">
						<label for="Direccion">Direccion</label>
					</div>
					<div class="form-group, col-xs-6">
						<label for="Calle">Calle</label>
						<input type="text" class="form-control" name="Calle">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Colonia">Colonia</label>
						<input type="text" class="form-control" name="Colonia">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Ciudad">Ciudad</label>
						<input type="text" class="form-control" name="Ciudad">
					</div>
					<div class="form-group, col-xs-6">
						<label for="CP">C.P.</label>
						<input type="text" class="form-control" name="CP">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Telefono">Telefono</label>
						<input type="text" class="form-control" name="Telefono">
					</div>
					<div class="form-group, col-xs-6">
						<label for="NumeroExterior_Interior">Numero Exterior-Interior</label>
						<input type="text" class="form-control" name="NumeroExterior_Interior">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Municipio">Municipio</label>
						<input type="text" class="form-control" name="Municipio">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Estado">Estado</label>
						<input type="text" class="form-control" name="Estado">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Pais">Pais</label>
						<input type="text" class="form-control" name="Pais">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Celular">Celular</label>
						<input type="text" class="form-control" name="Celular">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Correo">Correo Electronico</label>
						<input type="text" class="form-control" name="Correo">
					</div>
					
					<div class="col-xs-12">
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/consultarPacientes')}}" class="btn btn-danger">Cancelar</a>
					</div>
				</form>
				<script >
					$(document).ready(function() {
						$("#no").click(function(){
							$("#Seguro").prop("disabled", true);
						});

						$("#si").click(function(){
							$("#Seguro").prop("disabled", false);
						});
					
					});
				</script>
@stop
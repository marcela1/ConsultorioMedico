@extends('master')
@section('encabezado')
<h1>Editar Paciente</h1>
@stop
@section('contenido')
				<form action="{{url('/actualizarPaciente')}}/{{$pacientes->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group, col-xs-12">
						<label for="FechaRegistro">Fecha de Registro</label>
						<input type="text" value="{{$pacientes->fecha_registro}}" class="form-control" name="FechaRegistro">
					<br></div>
					<div class="form-group, col-xs-4" >
						<label for="Nombre">Nombre</label>
						<input type="text" value="{{$pacientes->nombre}}" class="form-control" name="Nombre">
					</div>
					<div class="form-group, col-xs-4">
						<label for="ApellidoPat">Apellido Paterno</label>
						<input type="text" value="{{$pacientes->apellido_paterno}}" class="form-control" name="ApellidoPat">
					</div>
					<div class="form-group, col-xs-4">
						<label for="ApellidoMat">Apellido Materno</label>
						<input type="text" value="{{$pacientes->apellido_materno}}" class="form-control" name="ApellidoMat">
					<br></div>
					<div class="form-group, col-xs-6">
						<label for="FechaNacimiento">Fecha de Nacimiento</label>
						<input type="text" class="form-control" value="{{$pacientes->fecha_nacimiento}}" name="FechaNacimiento">
					</div>
				</br>
					<div class="form-group, col-xs-12">
						<label for="Sexo">Sexo</label>
							<?php

							if($pacientes->sexo == "Masculino")
							{
							?>
							<input type="radio" name="Sexo" value="Femenino">Femenino
							<input type="radio" name="Sexo" value="Masculino" checked="true">Masculino
							<?php
							}
							else
							{
							?>
							<input type="radio" name="Sexo" value="Femenino" checked="true">Femenino
							<input type="radio" name="Sexo" value="Masculino">Masculino
							<?php
							}
							?>	
					</div>
				
					<div class="form-group, col-xs-12">
						<label for="EstadoCivil">Estado Civil</label>
							<?php

							if($pacientes->estado_civil == "Soltero")
							{
							?>
							<input type="radio" name="EstadoCivil" checked="true" value="Soltero">Soltero
							<input type="radio" name="EstadoCivil" value="Casado">Casado
							<input type="radio" name="EstadoCivil" value="Union Libre">Union Libre
							<input type="radio" name="EstadoCivil" value="Viudo">Viudo
							<input type="radio" name="EstadoCivil" value="Otro">Otro
							<?php
							}
							if($pacientes->estado_civil == "Casado")
							{
							?>
							<input type="radio" name="EstadoCivil"  value="Soltero">Soltero
							<input type="radio" name="EstadoCivil" checked="true" value="Casado">Casado
							<input type="radio" name="EstadoCivil" value="Union Libre">Union Libre
							<input type="radio" name="EstadoCivil" value="Viudo">Viudo
							<input type="radio" name="EstadoCivil" value="Otro">Otro
							<?php
							}
							if($pacientes->estado_civil == "Union Libre")
							{
							?>
							<input type="radio" name="EstadoCivil"  value="Soltero">Soltero
							<input type="radio" name="EstadoCivil" value="Casado">Casado
							<input type="radio" name="EstadoCivil" checked="true"  value="Union Libre">Union Libre
							<input type="radio" name="EstadoCivil" value="Viudo">Viudo
							<input type="radio" name="EstadoCivil" value="Otro">Otro
							<?php
							}
							if($pacientes->estado_civil == "Viudo")
							{
							?>
							<input type="radio" name="EstadoCivil"  value="Soltero">Soltero
							<input type="radio" name="EstadoCivil" value="Casado">Casado
							<input type="radio" name="EstadoCivil"  value="Union Libre">Union Libre
							<input type="radio" name="EstadoCivil" checked="true"  value="Viudo">Viudo
							<input type="radio" name="EstadoCivil" value="Otro">Otro
							<?php
							}
							if($pacientes->estado_civil == "Otro")
							{
							?>
							<input type="radio" name="EstadoCivil"  value="Soltero">Soltero
							<input type="radio" name="EstadoCivil" value="Casado">Casado
							<input type="radio" name="EstadoCivil"  value="Union Libre">Union Libre
							<input type="radio" name="EstadoCivil"  value="Viudo">Viudo
							<input type="radio" name="EstadoCivil" checked="true"  value="Otro">Otro
							<?php
							}
							else if($pacientes->estado_civil == "")
							{
							?>
							<input type="radio" name="EstadoCivil"  value="Soltero">Soltero
							<input type="radio" name="EstadoCivil" value="Casado">Casado
							<input type="radio" name="EstadoCivil"  value="Union Libre">Union Libre
							<input type="radio" name="EstadoCivil"  value="Viudo">Viudo
							<input type="radio" name="EstadoCivil"  value="Otro">Otro
							<?php
							}			
							?>	
					</div>
					<div class="form-group, col-xs-6">
						<label for="LugarNacimiento">Lugar de Nacimiento</label>
						<input type="text" class="form-control" value="{{$pacientes->lugar_nacimiento}}" name="LugarNacimiento">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Ocupacion">Ocupacion</label>
						<input type="text" class="form-control" value="{{$pacientes->ocupacion}}" name="Ocupacion">
					</div>
					<div class="form-group, col-xs-6">
						<label for="TipoSangre">Tipo de Sangre</label>
						<input type="text" class="form-control" value="{{$pacientes->tipo_sangre}}" name="TipoSangre">
					</div>
					<div class="form-group, col-xs-12">
						<label for="Seguro">Portador de Seguro Medico: </label>
						SI<input type="radio" name="Seguro" id="si" value="SI">
						NO<input type="radio" name="Seguro" id="no" value="NO">
					<br><br></div>
					<div class="form-group, col-xs-6">
						<label for="SeguroMedico">Nombre del seguro medico</label>
						<input type="text" class="form-control" id="Seguro" value="{{$pacientes->seguro_medico}}" name="SeguroMedico">
					</div>
					<div class="form-group, col-xs-6">
						<label for="CURP">CURP (Clave Unica de Registro de Poblacion)</label>
						<input type="text" class="form-control" value="{{$pacientes->curp}}" name="CURP">
					</div>
					<div class="form-group, col-xs-12">
						<label for="Direccion">Direccion</label>
					</div>
					<div class="form-group, col-xs-6">
						<label for="Calle">Calle</label>
						<input type="text" class="form-control" value="{{$pacientes->calle}}" name="Calle">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Colonia">Colonia</label>
						<input type="text" class="form-control" value="{{$pacientes->colonia}}" name="Colonia">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Ciudad">Ciudad</label>
						<input type="text" class="form-control" value="{{$pacientes->ciudad}}" name="Ciudad">
					</div>
					<div class="form-group, col-xs-6">
						<label for="CP">C.P.</label>
						<input type="text" class="form-control" value="{{$pacientes->codigo_postal}}" name="CP">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Telefono">Telefono</label>
						<input type="text" class="form-control" value="{{$pacientes->telefono}}" name="Telefono">
					</div>
					<div class="form-group, col-xs-6">
						<label for="NumeroExterior_Interior">Numero Exterior-Interior</label>
						<input type="text" class="form-control" value="{{$pacientes->numero_casa}}" name="NumeroExterior_Interior">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Municipio">Municipio</label>
						<input type="text" class="form-control" value="{{$pacientes->municipio}}" name="Municipio">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Estado">Estado</label>
						<input type="text" class="form-control" value="{{$pacientes->estado}}" name="Estado">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Pais">Pais</label>
						<input type="text" class="form-control" value="{{$pacientes->pais}}" name="Pais">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Celular">Celular</label>
						<input type="text" class="form-control" value="{{$pacientes->celular}}" name="Celular">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Correo">Correo Electronico</label>
						<input type="text" class="form-control" value="{{$pacientes->correo}}" name="Correo">
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
							$("#Seguro").val('');
						});

						$("#si").click(function(){
							$("#Seguro").prop("disabled", false);

						});
					
					});
				</script>
@stop
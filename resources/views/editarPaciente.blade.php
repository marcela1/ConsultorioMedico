@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="{{asset("imagenes/edit.png")}}" width="85" height="75" ALIGN="left"><font color="White" face="verdana">Editar Paciente</font></h1>
</div>
@stop
@section('contenido')
<center>
				<form action="{{url('/actualizarPaciente')}}/{{$pacientes->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div style="width:1200px;height:990px;border:3px solid #8DC0E9;">
				<div P ALIGN=left>
					<div class="form-group, col-xs-12">
						<label for="FechaRegistro"><b>Fecha de Registro:</b></label>
						<input type="text" value="{{$pacientes->fecha_registro}}" class="form-control" name="FechaRegistro">
					<br></div>
					<div class="form-group, col-xs-4" >
						<label for="Nombre"><b>Nombre:</b></label>
						<input type="text" value="{{$pacientes->nombre}}" class="form-control" name="Nombre">
					</div>
					<div class="form-group, col-xs-4">
						<label for="ApellidoPat"><b>Apellido Paterno:</b></label>
						<input type="text" value="{{$pacientes->apellido_paterno}}" class="form-control" name="ApellidoPat">
					</div>
					<div class="form-group, col-xs-4">
						<label for="ApellidoMat"><b>Apellido Materno:</b></label>
						<input type="text" value="{{$pacientes->apellido_materno}}" class="form-control" name="ApellidoMat">
					<br></div>
					<div class="form-group, col-xs-6">
						<label for="FechaNacimiento"><b>Fecha de Nacimiento:</b></label>
						<input type="text" class="form-control" value="{{$pacientes->fecha_nacimiento}}" name="FechaNacimiento">
					</div>
				</br>
					<div class="form-group, col-xs-12">
						<label for="Sexo"><b>Sexo: </b></label>
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
						<label for="EstadoCivil"><b>Estado Civil: </b></label>
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
						<label for="LugarNacimiento"><b>Lugar de Nacimiento:</b></label>
						<input type="text" class="form-control" value="{{$pacientes->lugar_nacimiento}}" name="LugarNacimiento">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Ocupacion"><b>Ocupacion:</b></label>
						<input type="text" class="form-control" value="{{$pacientes->ocupacion}}" name="Ocupacion">
					</div>
					<div class="form-group, col-xs-6">
						<label for="TipoSangre"><b>Tipo de Sangre:</b></label>
						<input type="text" class="form-control" value="{{$pacientes->tipo_sangre}}" name="TipoSangre">
					</div>
					<div class="form-group, col-xs-12">
						<label for="Seguro"><b>Portador de Seguro Medico: </b></label>
						SI<input type="radio" name="Seguro" id="si" value="SI">
						NO<input type="radio" name="Seguro" id="no" value="NO">
					<br><br></div>
					<div class="form-group, col-xs-6">
						<label for="SeguroMedico"><b>Nombre del seguro medico:</b></label>
						<input type="text" class="form-control" id="Seguro" value="{{$pacientes->seguro_medico}}" name="SeguroMedico">
					</div>
					<div class="form-group, col-xs-6">
						<label for="CURP"><b>CURP (Clave Unica de Registro de Poblacion):</b></label>
						<input type="text" class="form-control" value="{{$pacientes->curp}}" name="CURP">
					</div>
					<div class="form-group, col-xs-12">
						<label for="Direccion"><b>Direccion:</b></label>
					</div>
					<div class="form-group, col-xs-6">
						<label for="Calle"><b>Calle:</b></label>
						<input type="text" class="form-control" value="{{$pacientes->calle}}" name="Calle">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Colonia"><b>Colonia:</b></label>
						<input type="text" class="form-control" value="{{$pacientes->colonia}}" name="Colonia">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Ciudad"><b>Ciudad:<b></label>
						<input type="text" class="form-control" value="{{$pacientes->ciudad}}" name="Ciudad">
					</div>
					<div class="form-group, col-xs-6">
						<label for="CP"><b>C.P.:</b></label>
						<input type="text" class="form-control" value="{{$pacientes->codigo_postal}}" name="CP">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Telefono"><b>Telefono:</b></label>
						<input type="text" class="form-control" value="{{$pacientes->telefono}}" name="Telefono">
					</div>
					<div class="form-group, col-xs-6">
						<label for="NumeroExterior_Interior"><b>Numero Exterior-Interior:</b></label>
						<input type="text" class="form-control" value="{{$pacientes->numero_casa}}" name="NumeroExterior_Interior">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Municipio"><b>Municipio:</b></label>
						<input type="text" class="form-control" value="{{$pacientes->municipio}}" name="Municipio">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Estado"><b>Estado:</b></label>
						<input type="text" class="form-control" value="{{$pacientes->estado}}" name="Estado">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Pais"><b>Pais:</b></label>
						<input type="text" class="form-control" value="{{$pacientes->pais}}" name="Pais">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Celular"><b>Celular:</b></label>
						<input type="text" class="form-control" value="{{$pacientes->celular}}" name="Celular">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Correo"><b>Correo Electronico:</b></label>
						<input type="text" class="form-control" value="{{$pacientes->correo}}" name="Correo">
					</div>
				</div>
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
</center>
@stop
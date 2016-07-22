@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="imagenes/registro.png" width="85" height="82" ALIGN="left"><font color="White" face="verdana">Registrar Pacientes</font></h1>
</div>
@stop
@section('contenido')
<center>
				<form action="{{url('/guardarPaciente')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div style="width:1200px;height:685px;border:3px solid #8DC0E9;">

					<div class="form-group, col-xs-12">
						<label for="FechaRegistro"><P ALIGN=left><b>Fecha de Registro:</b></label>						
							<div class="input-group">
                                <input type="text" class="form-control datepicker" name="FechaRegistro" >
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar "></span>
                                </div>
                            </div>                            
					<br></div>
					<div P ALIGN=left>
					<div class="form-group, col-xs-4" >
						<label for="Nombre"><b>Nombre:</b></label>
						<input type="text" class="form-control" name="Nombre">
					</div>
					<div class="form-group, col-xs-4">
						<label for="ApellidoPat"><b>Apellido Paterno:</b></label>
						<input type="text" class="form-control" name="ApellidoPat">
					</div>
					<div class="form-group, col-xs-4">
						<label for="ApellidoMat"><b>Apellido Materno:</b></label>
						<input type="text" class="form-control" name="ApellidoMat">
					<br></div>
					
					<div class="form-group, col-xs-6">
						<label for="FechaNacimiento"><b>Fecha de Nacimiento:</b></label>
						
							<div class="input-group">
                                <input type="text" class="form-control datepicker" name="FechaNacimiento" >
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar "></span>
                                </div>
                            </div>      
					<br></div>
				
					<div class="form-group, col-xs-12">
						<label for="Sexo"><b>Sexo:  </b></label>
						<input type="radio" name="Sexo" value="Femenio">Femenino
						<input type="radio" name="Sexo" value="Masculino">Masculino
					<br><br></div>
					<div class="form-group, col-xs-12">
						<label for="EstadoCivil"><b>Estado Civil:  </b></label>
						<input type="radio" name="EstadoCivil" value="Soltero">Soltero
						<input type="radio" name="EstadoCivil" value="Casado">Casado
						<input type="radio" name="EstadoCivil" value="Union Libre">Union Libre
						<input type="radio" name="EstadoCivil" value="Viudo">Viudo
						<input type="radio" name="EstadoCivil" value="Otro">Otro
					<br><br></div>
					<div class="form-group, col-xs-6">
						<label for="LugarNacimiento"><b>Lugar de Nacimiento:</b></label>
						<input type="text" class="form-control" name="LugarNacimiento">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Ocupacion"><b>Ocupación:</b></label>
						<input type="text" class="form-control" name="Ocupacion">
					<br></div>
					<div class="form-group, col-xs-6">
						<label for="TipoSangre"><b>Tipo de Sangre:</b></label>
						<input type="text" class="form-control" name="TipoSangre">
					<br></div>
					
					<div class="form-group, col-xs-12">
						<label for="Seguro"><b>Portador de Seguro Medico:</b></label>
						SI<input type="radio" name="Seguro" id="si" value="SI">
						NO<input type="radio" name="Seguro" id="no" value="NO">
					<br><br></div>

					<div class="form-group, col-xs-6">
						<label for="SeguroMedico"><b>Nombre del seguro medico:</b></label>
						<input type="text" class="form-control" ID="Seguro" name="SeguroMedico">
					</div>
					<div class="form-group, col-xs-6">
						<label for="CURP"><b>CURP (Clave Unica de Registro de Poblacion):</b></label>
						<input type="text" class="form-control" name="CURP">
					<br></div>
				</div>
				</div> 

				<br><div class="jumbotron" style="background: #8DC0E9" >

				<div P ALIGN=left>
					<div class="form-group, col-xs-12">
						<h4><label for="Direccion"><font color="White" face="verdana"><b>Dirección</b></font></label></h4>
					</div>
				</div>
			</div>
					<div style="width:1200px;height:430px;border:3px solid #8DC0E9;">
					<div P ALIGN=left>

					<div class="form-group, col-xs-6">

						<label for="Calle"><b>Calle:</b></label>
						<input type="text" class="form-control" name="Calle">
					</div>

					<div class="form-group, col-xs-6">
						<label for="Colonia"><b>Colonia:</b></label>
						<input type="text" class="form-control" name="Colonia">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Ciudad"><b>Ciudad:</b></label>
						<input type="text" class="form-control" name="Ciudad">
					</div>
					<div class="form-group, col-xs-6">
						<label for="CP"><b>C.P.:</b></label>
						<input type="text" class="form-control" name="CP">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Telefono"><b>Telefono:</b></label>
						<input type="text" class="form-control" name="Telefono">
					</div>
					<div class="form-group, col-xs-6">
						<label for="NumeroExterior_Interior"><b>Numero Exterior-Interior:</b></label>
						<input type="text" class="form-control" name="NumeroExterior_Interior">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Municipio"><b>Municipio:</b></label>
						<input type="text" class="form-control" name="Municipio">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Estado"><b>Estado:</b></label>
						<input type="text" class="form-control" name="Estado">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Pais"><b>Pais:</b></label>
						<input type="text" class="form-control" name="Pais">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Celular"><b>Celular:</b></label>
						<input type="text" class="form-control" name="Celular">
					</div>
					<div class="form-group, col-xs-6">
						<label for="Correo"><b>Correo Electronico:</b></label>
						<input type="text" class="form-control" name="Correo">
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
						});

						$("#si").click(function(){
							$("#Seguro").prop("disabled", false);
						});
					
					});
				</script>
				<script>
				    	$('.datepicker').datepicker({
				        format: "yyyy/mm/dd",
				        language: "es",
				        autoclose: true
				   			 });
				</script>
</center>
@stop
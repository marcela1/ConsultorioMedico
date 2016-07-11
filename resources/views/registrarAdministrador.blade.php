@extends('master')
@section('encabezado')
<h1>Datos de la Cuenta</h1>
@stop
@section('contenido')

<div class="col-xs-6  " >
				<form action="{{url('/guardarAdministrador')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">
				
					
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" name="nombre">

					</div>
					<div class="form-group">
						<label for="apellidop">Apellido Paterno</label>
						<input type="text" class="form-control" name="apellidop">

					</div>
					<div class="form-group">
						<label for="apellidom">Apellido Materno</label>
						<input type="text" class="form-control" name="apellidom">

					</div>
					<div class="form-group">
						<label for="especialidad">Especialidad</label>
						<input type="text" class="form-control" name="especialidad">

					</div>
					<div class="form-group">
						<label for="cedulaprofesional">Cedula Profesional</label>
						<input type="text" class="form-control" name="cedulaprofesional">

					</div>
					<div class="form-group">
						<label for="usuario">Usuario</label>
						<input type="text" class="form-control" name="usuario">

					</div>
					<div class="form-group">
						<label for="contraseña">Contraseña</label>
						<input type="text" class="form-control" name="contraseña">

					</div>
						<div class="form-group">
						<label for="contraseña">Confirmar Contraseña</label>
						<input type="text" class="form-control" name="contraseña">
						</div>
						</div>


				<div class="col-xs-6 " >
					
				
				
						<div class="form-group">
						<label for="direccion">Direccion</label>
						<input type="text" class="form-control" name="direccion">

					</div>
						<div class="form-group">
						<label for="estado">Estado</label>
						<input type="text" class="form-control" name="estado">

					</div>
						<div class="form-group">
						<label for="telefono">Telefono</label>
						<input type="text" class="form-control" name="telefono">

					</div>
						<div class="form-group">
						<label for="celular">Celular</label>
						<input type="text" class="form-control" name="celular">

					</div>
						<div class="form-group">
						<label for="correo">Correo</label>
						<input type="text" class="form-control" name="correo">

					</div>
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/')}}" class="btn btn-danger"> Cancelar</a>
				</div>
					
				</form>
		
@stop
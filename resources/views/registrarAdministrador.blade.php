@extends('master')
@section('encabezado')
<h1>Datos de la Cuenta</h1>
@stop
@section('contenido')

<div class="col-xs-12 col-sm-6 col-md-6" >
				<form action="{{url('/guardarAdministrador')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">
					<!-- 

				@if(count($errors) > 0)
					<div class="errors">
					<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
					</ul>
					</div>
				@endif
				-->

					
					<div class="form-group">
						<label for="nombre"> Nombre </label>
						 <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">

					</div>
					<div class="form-group">
						<label for="apellido_paterno">Apellido Paterno</label>
						<input type="text" class="form-control" name="apellido_paterno" value="{{old('apellido_paterno')}}">

					</div>
					<div class="form-group">
						<label for="apellido_materno">Apellido Materno</label>
						<input type="text" class="form-control" name="apellido_materno" value="{{old('apellido_materno')}}">

					</div>
					<div class="form-group">
						<label for="especialidad">Especialidad</label>
						<input type="text" class="form-control" name="especialidad" value="{{old('especialidad')}}">

					</div>
					<div class="form-group">
						<label for="cedula">Cedula Profesional</label>
						<input type="text" class="form-control" name="cedula" value="{{old('cedula')}}">

					</div>
					<div class="form-group">
						<label for="usuario">Usuario</label>
						<input type="text" class="form-control" name="usuario" value="{{old('usuario')}}">
						 @if( $errors->has('usuario') )
             				 @foreach($errors->get('usuario') as $error )
                 				 <br />* {{ $error }}
            				  @endforeach
         				 @endif
					</div>
					<div class="form-group">
						<label for="contraseña">Contraseña</label>
						<input type="text" class="form-control" name="contraseña" >
						 @if( $errors->has('contraseña') )
             				 @foreach($errors->get('contraseña') as $error )
                 				 <br />* {{ $error }}
            				  @endforeach
         				 @endif

					</div>
						<div class="form-group">
						<label for="contraseña_confirmation">Confirmar Contraseña</label>
						<input type="text" class="form-control" name="contraseña_confirmation">
						 @if( $errors->has('contraseña_confirmation') )
             				 @foreach($errors->get('contraseña_confirmation') as $error )
                 				 <br />* {{ $error }}
            				  @endforeach
         				 @endif

						</div>
						</div>


				<div class="col-xs-12 col-sm-6 col-md-4 " >
					
				
				
						<div class="form-group">
						<label for="direccion">Direccion</label>
						<input type="text" class="form-control" name="direccion" value="{{old('direccion')}}">

					</div>
						<div class="form-group">
						<label for="estado">Estado</label>
						<input type="text" class="form-control" name="estado" value="{{old('estado')}}">

					</div>
						<div class="form-group">
						<label for="telefono">Telefono</label>
						<input type="text" class="form-control" name="telefono" value="{{old('telefono')}}">

					</div>
						<div class="form-group">
						<label for="celular">Celular</label>
						<input type="text" class="form-control" name="celular" value="{{old('celular')}}">

					</div>
						<div class="form-group">
						<label for="correo">Correo</label>
						<input type="text" class="form-control" name="correo" value="{{old('correo')}}">
						 @if( $errors->has('correo') )
             				 @foreach($errors->get('correo') as $error )
                 				 <br />* {{ $error }}
            				  @endforeach
         				 @endif
					</div>
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/')}}" class="btn btn-default"> Cancelar</a>
				</div>
				
				</form>
			
@stop
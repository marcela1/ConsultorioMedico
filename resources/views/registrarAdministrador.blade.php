@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="imagenes/doc.png" width="88" height="78" ALIGN="left"><font color="White" face="verdana">Datos de la cuenta</font></h1>
</div>
@stop
@section('contenido')

<center>

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
				<div class="col-xs-12 col-sm-6 col-md-6" >
				-->
				<div style="width:1200px;height:650px;border:3px solid #8DC0E9;">
				<div P ALIGN=left>
					<div class="form-group, col-xs-6">
					<div class="form-group">
						<label for="nombre"><b>Nombre:</b></label>
						 <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">

					</div>
					</div>
					<div class="form-group, col-xs-6">
					<div class="form-group">
						<label for="apellido_paterno"><b>Apellido Paterno:</b></label>
						<input type="text" class="form-control" name="apellido_paterno" value="{{old('apellido_paterno')}}">

					</div>
				    </div>
				    <div class="form-group, col-xs-6">
					<div class="form-group">
						<label for="apellido_materno"><b>Apellido Materno:</b></label>
						<input type="text" class="form-control" name="apellido_materno" value="{{old('apellido_materno')}}">

					</div>
					</div>
					<div class="form-group, col-xs-6">
					<div class="form-group">
						<label for="especialidad"><b>Especialidad:</b></label>
						<input type="text" class="form-control" name="especialidad" value="{{old('especialidad')}}">

					</div>
					</div>
					<div class="form-group, col-xs-6">
					<div class="form-group">
						<label for="cedula"><b>Cedula Profesional:</b></label>
						<input type="text" class="form-control" name="cedula" value="{{old('cedula')}}">

					</div>
					</div>
					<div class="form-group, col-xs-6">
					<div class="form-group">
						<label for="usuario"><b>Usuario:</b></label>
						<input type="text" class="form-control" name="usuario" value="{{old('usuario')}}">
						 @if( $errors->has('usuario') )
             				 @foreach($errors->get('usuario') as $error )
                 				 <br />* {{ $error }}
            				  @endforeach
         				 @endif
					</div>
				    </div>
				    <div class="form-group, col-xs-6">
					<div class="form-group">
						<label for="contraseña"><b>Contraseña:</b></label>
						<input type="text" class="form-control" name="contraseña" >
						 @if( $errors->has('contraseña') )
             				 @foreach($errors->get('contraseña') as $error )
                 				 <br />* {{ $error }}
            				  @endforeach
         				 @endif

					</div>
					</div>
					<div class="form-group, col-xs-6">
						<div class="form-group">
						<label for="contraseña_confirmation"><b>Confirmar Contraseña:</b></label>
						<input type="text" class="form-control" name="contraseña_confirmation">
						 @if( $errors->has('contraseña_confirmation') )
             				 @foreach($errors->get('contraseña_confirmation') as $error )
                 				 <br />* {{ $error }}
            				  @endforeach
         				 @endif

						</div>
					</div>
					
				
				<div class="form-group, col-xs-6">
						<div class="form-group">
						<label for="direccion"><b>Direccion:</b></label>
						<input type="text" class="form-control" name="direccion" value="{{old('direccion')}}">
					    </div>
				</div>
				<div class="form-group, col-xs-6">
						<div class="form-group">
						<label for="estado"><b>Estado:</b></label>
						<input type="text" class="form-control" name="estado" value="{{old('estado')}}">

					</div>
				</div>
			
				<div class="form-group, col-xs-6">
						<div class="form-group">
						<label for="telefono"><b>Telefono:</b></label>
						<input type="text" class="form-control" name="telefono" value="{{old('telefono')}}">

					</div>
				</div>
				<div class="form-group, col-xs-6">
						<div class="form-group">
						<label for="celular"><b>Celular:</b></label>
						<input type="text" class="form-control" name="celular" value="{{old('celular')}}">

					</div>
				</div>
				<div class="form-group, col-xs-6">
						<div class="form-group">
						<label for="correo"><b>Correo:</b></label>
						<input type="text" class="form-control" name="correo" value="{{old('correo')}}">
						 @if( $errors->has('correo') )
             				 @foreach($errors->get('correo') as $error )
                 				 <br />* {{ $error }}
            				  @endforeach
         				 @endif
					</div>
					</div>
				</div>
				</div>
			
				<div>
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/')}}" class="btn btn-danger"> Cancelar</a>
				</div>
				
				</form>
</center>			
@stop
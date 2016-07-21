@extends('master')
@section('encabezado')
<h1>Registrar Receta</h1>
@stop
@section('contenido')
				<form action="{{url('/guardarReceta')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group, col-xs-6">
						<label for="Nombre">Nombre </label>
						<input type="text" class="form-control" name="Nombre" value="">
					<br></div>
					<div class="form-group, col-xs-6" >
						<label for="Fecha">Fecha</label>
						<input type="text" class="form-control" name="Fecha"><br>
					</div>
					<div class="form-group, col-xs-6">
						<label for="Hora">Hora</label>
						<input type="text" class="form-control" name="Hora"><br>
					</div>
					<div class="form-group, col-xs-6">
						<label for="Peso">Peso</label>
						<input type="text" class="form-control" name="Peso">
					<br></div>
					
					<div class="form-group, col-xs-12">
						<label for="Tratamiento">Tratamineto</label>
						<textarea row="50" col="250" name="Tratamiento" class="form-control"></textarea>
					<br></div>
						<input type="text" class="form-control" name="Doctor" value="1" style="visibility:hidden">

					<div class="col-xs-12">
					<a href="{{url('/')}}" class="btn btn-info">Imprimir Receta</a>
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
					</div>
				</form>
@stop
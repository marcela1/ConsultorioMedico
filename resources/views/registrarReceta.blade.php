@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="imagenes/registro.png" width="85" height="82" ALIGN="left"><font color="White" face="verdana">Registrar Receta</font></h1>
</div>
@stop
@section('contenido')
<center>
	<div style="width:1200px;height:300px;border:3px solid #8DC0E9;">
		<div P ALIGN=left>
				<form action="{{url('/guardarReceta')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group, col-xs-6">
						<label for="Nombre"><b>Nombre:</b></label>
						<input type="text" class="form-control" name="Nombre" value="">
					<br></div>
					<div class="form-group, col-xs-6" >
						<label for="Fecha"><b>Fecha:</b></label>
						<input type="text" class="form-control" name="Fecha"><br>
					</div>
					<div class="form-group, col-xs-6">
						<label for="Hora"><b>Hora:</b></label>
						<input type="text" class="form-control" name="Hora"><br>
					</div>
					<div class="form-group, col-xs-6">
						<label for="Peso"><b>Peso:</b></label>
						<input type="text" class="form-control" name="Peso">
					<br></div>
					
					<div class="form-group, col-xs-12">
						<label for="Tratamiento"><b>Tratamineto:</b></label>
						<textarea row="50" col="250" name="Tratamiento" class="form-control"></textarea>
					<br></div>
	</div>
	 </div>
						<input type="text" class="form-control" name="Doctor" value="1" style="visibility:hidden">
   
					<div class="col-xs-12">
					<a href="{{url('/')}}" class="btn btn-info">Imprimir Receta</a>
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
					</div>
				</form>


</center>
@stop
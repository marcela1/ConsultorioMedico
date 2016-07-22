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
<<<<<<< HEAD
						<label for="Nombre">Nombre </label>
						<select class="form-control" name="Nombre" id="">
								<option value=""><font color="White">Seleccione Un Paciente</font></option>
								@foreach($pacientes as $p)
								<option value="{{$p->id}}">{{$p->nombre}}</option>
								@endforeach
							</select>		
					<br></div>
					<div class="form-group, col-xs-6" >
						<label for="Fecha">Fecha</label>
						<div class="input-group">
                                <input type="text" class="form-control datepicker" name="Fecha" >
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar "></span>
                                </div>
                     <br> <br>  </div> 
=======
						<label for="Nombre"><b>Nombre:</b></label>
						<input type="text" class="form-control" name="Nombre" value="">
					<br></div>
					<div class="form-group, col-xs-6" >
						<label for="Fecha"><b>Fecha:</b></label>
						<input type="text" class="form-control" name="Fecha"><br>
>>>>>>> f9fcfa0e9e1aaf8719e9783854a9f5dc5ea0442c
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
<<<<<<< HEAD
				<script>
				    	$('.datepicker').datepicker({
				        format: "yyyy/mm/dd",
				        language: "es",
				        autoclose: true
				   			 });
				</script>
=======


</center>
>>>>>>> f9fcfa0e9e1aaf8719e9783854a9f5dc5ea0442c
@stop
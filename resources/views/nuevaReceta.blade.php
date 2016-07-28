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
				<form action="{{url('/guardarNuevaReceta')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group, col-xs-6">

						<label for="Nombre">Nombre </label>
						<select class="form-control" name="Nombre" >
								<option value=""><font color="White">Seleccione un paciente</font></option>
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
                 </div>
					<div class="form-group, col-xs-6">
						<label for="Hora"><b>Hora:</b></label>
						<input type="text" class="form-control" name="Hora" ><br>
					</div>
					<div class="form-group, col-xs-6">
						<label for="Peso"><b>Peso:</b></label>
						<input type="text" class="form-control" name="Peso" >
					<br></div>
					
					<div class="form-group, col-xs-6">
						<label for="Tratamiento"><b>Tratamineto:</b></label>
						<input name="Tratamiento" type="Text" class="form-control" >
					<br></div>
					<div></div>
					<div class="form-group, col-xs-6">
						<label for="Doctor"><b>Doctor:</b></label>
						<select class="form-control" name="Doctor" >
								<option value=""><font color="White">Seleccione un Doctor</font></option>
								@foreach($administradores as $a)
								<option value="{{$a->id}}">{{$a->nombre}}</option>
								@endforeach
							</select>	
					<br></div>
   
	</div>
	 </div>
						
					<div class="col-xs-12">
					<a href="{{url('/')}}" class="btn btn-info">Imprimir Receta</a>
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
					</div>
				</form>

				<script>
				    	$('.datepicker').datepicker({
				        format: "yyyy/mm/dd",
				        language: "es",
				        autoclose: true
				   			 });
				</script>



</center>

@stop
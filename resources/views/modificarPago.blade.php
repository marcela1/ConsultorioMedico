@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="imagenes/p.png" width="85" height="75" ALIGN="left"><font color="White" face="verdana">Registrar Pago</font></h1>
</div>
@stop
@section('contenido')
<center>
	<div style="width:1200px;height:300px;border:3px solid #8DC0E9;">
		<div P ALIGN=left>
				<form action="{{url('/actualizarPago')}}/{{$pago->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group, col-xs-12">

						<label for="Nombre">Nombre </label>
						<select class="form-control" name="nombre" id="">
								<option value=""><font color="White">Seleccione Un Paciente</font></option>
								@foreach($pacientes as $p)
								<option value="{{$p->id}}">{{$p->nombre}}</option>
								@endforeach 
							</select>		
					<br></div>
				
					<div class="form-group, col-xs-6">
						<label for="Hora"><b>Hora:</b></label>
						<input value="{{$pago->hora}}" type="text" class="form-control" name="hora"><br>
					</div>
						<div class="form-group, col-xs-6" >
						<label for="Fecha">Fecha</label>
						<div class="input-group">
                                <input value="{{$pago->fecha}}" type="text" class="form-control datepicker" name="fecha" >
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar "></span>
                                </div>
                     <br> <br>  </div> 
                 </div>
					
					<div class="form-group, col-xs-12">
						<label for="Pago"><b>Total a Pagar:</b></label>
						<input value="{{$pago->pago}}" type="text" class="form-control" name="pago"><br>
					<br></div>
	</div>
	 </div>
						<input type="text" class="form-control" name="Doctor" value="1" style="visibility:hidden">
   
					<div class="col-xs-12">	
					<input type="submit" class="btn btn-primary">
					<a href="{{url('/mostrarPago')}}" class="btn btn-danger">Cancelar</a>
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
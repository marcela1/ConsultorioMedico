@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="imagenes/100.png" width="100" height="80" ALIGN="left"><font color="White" face="verdana">Historial Clinico</font></h1>
</div>
@stop
@section('contenido')
				<div class="col-xs-12 ">
				<form action="{{ url('/seleccionarHistorial')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">
					
					<div class="form-group">
						<h3><label for=""><font color="#2878C2" face="verdana"><b>Pacientes:</b></font></label></h3>
						<select class="form-control"name="pacientes" id="">
						<option value=""><font color="White">Seleccione Un Paciente</font></option>

							@foreach($pacientes as $p)
							<option value="{{$p->id}}">{{$p->nombre}}</option>
							@endforeach
						</select>
						<input class="btn btn-primary"type="submit" value="Mostrar">
					</div>
					
				</form>
			</div>
			<div class="col-xs-12 ">
				<table class="table table-hover">
					<thead>
						<tr class="success">
							<th>ID</th>
							<th>Paciente</th>
							<th>Fecha de Consulta</th>
							<th>Hora</th>
							<th>Enfermedad</th>
							<th>Tratamiento</th>
						    <th>Doctor</th>
							<th>Visualizar Historial</th>
							
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</dir>
@stop
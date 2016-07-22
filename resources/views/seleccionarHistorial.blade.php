@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="imagenes/100.png" width="100" height="80" ALIGN="left"><font color="White" face="verdana">Historial Clinico</font></h1>
</div>
@stop
@section('contenido')
			<form action="{{ url('/seleccionarHistorial')}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">
					<div class="form-group">
						<label for="">Nombre</label>
						<select class="form-control"name="historial" id="">
							@foreach($historial as $h)
							<option value="{{$h->id}}">{{$h->nombre}}</option>
							@endforeach
						</select>
						<input class="btn btn-primary" type="submit" value="Mostrar">
					
					</div>
				</form>
				<form action="{{ url('/actualizarHistorial')}}/{{$id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token() }}">
		<dir class="row">
			<div class="col-xs-12">
				<table class="table table-hover">
					<thead>
						<tr class="success">
							<th>ID</th>
							<th>Fecha de Consulta</th>
							<th>Hora</th>
							<th>Enfermedad</th>
							<th>Tratamiento</th>
						    <th>Doctor</th>
							<th>Visualizar Historial</th>
							
						</tr>
					</thead>
					<tbody>
						@foreach($historial as $h)
						<tr>
							<td>{{$h->id}}</td>
							<td>{{$h->fecha}}</td>
							<td>{{$h->hora}}</td>
							<td>{{$h->diagnostico}}</td>
							<td>{{$h->tratamiento}}</td>
							<td>{{$h->doc }} {{$h->ap}} {{$h->am}}</td>
							<td>
							<a href="{{ url('/pdfReceta')}}/{{$h->id}}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
							</td>
							
						</tr>
						@endforeach 
					</tbody>
				</table>
			</div>
		</dir>
@stop
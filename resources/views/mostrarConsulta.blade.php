@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="imagenes/100.png" width="100" height="80" ALIGN="left"><font color="White" face="verdana">Gestion de Consulta</font></h1>
</div>
@stop
@section('contenido')
				<a href="{{url('cita')}}" class="btn btn-primary">Agregar Nueva Consulta
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</a>
			</div>
		</div>
		<dir class="row">
			<div class="col-xs-12">
				<table class="table table-hover">
					<thead>
						<tr class="success">
							<th>ID</th>
							<th>Nombre</th>
							<th>Apellido Paterno</th>
							<th>Apellido Materno</th>
						    <th>Doctor</th>
							<th>Fecha</th>
							<th>Hora</th>
							<th>Eliminar</th>
							<th>Editar</th>
							<th>Visualizar Receta</th>
							
						</tr>
					</thead>
					<tbody>
						@foreach($consulta as $c)
						<tr>
							<td>{{$c->id}}</td>
							<td>{{$c->nombre}}</td>
							<td>{{$c->apellido_paterno}}</td>
							<td>{{$c->apellido_materno}}</td>
							<td>{{$c->doc }} {{$c->ap}} {{$c->am}}</td>
							<td>{{$c->fecha}}</td>
							<td>{{$c->hora}}</td>
							
							<td>
								<a class="btn btn-danger btn-xs" href="{{url('eliminarCita')}}/{{$c->id}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar</a>
							</td>
							<td>
								<a class="btn btn-primary btn-xs" href="{{url('/modificarCita')}}/{{$c->id}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Editar</a>
							</td>
							<td>
							<a href="{{ url('/pdfReceta')}}/{{$c->id}}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
							</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</dir>
@stop
@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="imagenes/100.png" width="100" height="80" ALIGN="left"><font color="White" face="verdana">Citas Registradas</font></h1>
</div>
@stop
@section('contenido')
				<a href="{{url('cita')}}" class="btn btn-primary">Nueva Cita
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
							<th>Nombre Paciente</th>
							<th>Administrador</th>
							<th>Descripcion</th>
							<th>Fecha</th>
							<th>Hora</th>
							<th>Consultorio</th>
							<th>Eliminar</th>
							<th>Editar</th>
							
						</tr>
					</thead>
					<tbody>
						@foreach($cita as $p)
						<tr>
							<td>{{$p->id}}</td>
							<td>{{$p->nombre}}</td>
							<td>{{$p->na}}</td>
							<td>{{$p->descripcion}}</td>
							<td>{{$p->fecha}}</td>
							<td>{{$p->hora}}</td>
							<td>{{$p->consultorio}}</td>
							
							
							<td>
								<a class="btn btn-danger btn-xs" href="{{url('eliminarCita')}}/{{$p->id}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar</a>
							</td>
							<td>
								<a class="btn btn-primary btn-xs" href="{{url('/modificarCita')}}/{{$p->id}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Editar</a>
							</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</dir>
@stop
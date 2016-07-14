@extends('master')
@section('encabezado')
<h1>Citas Registradas</h1>
@stop
@section('contenido')
				<a href="{{url('cita')}}" class="btn btn-success">Nueva Cita
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</a>
			</div>
		</div>
		<dir class="row">
			<div class="col-xs-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>ID Paciente</th>
							<th>ID Administrador</th>
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
							<td>{{$p->id_paciente}}</td>
							<td>{{$p->id_administrador}}</td>
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
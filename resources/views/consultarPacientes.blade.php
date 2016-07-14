@extends('master')
@section('encabezado')
<h1>Gestion de Pacientes</h1>
@stop
@section('contenido')

				<a href="{{url('/registrarPaciente')}}" class="btn btn-success">Nuevo Paciente
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Apellido Paterno</th>
									<th>Apellido Materno</th>

									<th>Eliminar</th>
									<th>Editar</th>
								</tr>
							</thead>
						<tbody>
							@foreach($pacientes as $p)
							<tr>
								<td>{{$p->id}}</td>
								<td>{{$p->nombre}}</td>
								<td>{{$p->apellido_paterno}}</td>
								<td>{{$p->apellido_materno}}</td>

								<td><a href="{{url('/eliminarPaciente')}}/{{$p->id}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
								<td><a class"btn btn-primary btn-xs" href="{{url('/editarPaciente')}}/{{$p->id}}" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
							</tr>
							@endforeach
						</tbody>
					    </table>
@stop
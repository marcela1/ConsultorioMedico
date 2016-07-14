@extends('master')
@section('encabezado')
<h1>Gestion de Pacientes</h1>
@stop
@section('contenido')

				<a href="{{url('/registrarPaciente')}}"  class="btn btn-primary">Nuevo Paciente
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
						<table class="table table-hover">
							<thead>
								<tr class="active">
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

								<td><a href="{{url('/eliminarPaciente')}}/{{$p->id}}" class="btn btn-danger">Eliminar
				<span class="" aria-hidden= "true"></span></a>
								<td><a href="{{url('/editarPaciente')}}/{{$p->id}}" class="btn btn-primary">Editar<span class="" aria-hidden= "true"></span></a>
							</tr>

							@endforeach
						</tbody>
					    </table>
@stop
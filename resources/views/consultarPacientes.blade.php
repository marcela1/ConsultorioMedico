@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="imagenes/100.png" width="100" height="80" ALIGN="left"><font color="White" face="verdana">Pacientes Registrados</font></h1>
</div>
@stop
@section('contenido')

				<a href="{{url('/registrarPaciente')}}"  class="btn btn-primary">Nuevo Paciente
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
						<table class="table table-hover">
							<thead>
								<tr class="success">
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
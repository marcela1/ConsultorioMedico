@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="imagenes/100.png" width="100" height="80" ALIGN="left"><font color="White" face="verdana">Pagos Registrados</font></h1>
</div>
@stop
@section('contenido')
				<a href="{{url('/registrarPago')}}" class="btn btn-primary">Nuevo Pago
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
							<th>Pago</th>
							<th>Eliminar</th>
							<th>Editar</th>
							
							
						</tr>
					</thead>
					<tbody>
						@foreach($pago as $p)
						<tr>
							<td>{{$p->id}}</td>
							<td>{{$p->nombre}}</td>
							<td>{{$p->apellido_paterno}}</td>
							<td>{{$p->apellido_materno}}</td>
							<td>{{$p->doc }} {{$p->ap}} {{$p->am}}</td>
							<td>{{$p->fecha}}</td>
							<td>{{$p->hora}}</td>
							<td>{{$p->pago}}</td>
							<td>
								<a class="btn btn-danger btn-xs" href="{{url('/eliminarPago')}}/{{$p->id}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar</a>
							</td>
							<td>
								<a class="btn btn-primary btn-xs" href="{{url('/modificarPago')}}/{{$p->id}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Editar</a>
							</td>
						
							
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</dir>
@stop
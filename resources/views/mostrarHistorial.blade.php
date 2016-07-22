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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Receta</title>
</head>
<body>
	<h1>Receta</h1>
	<h2></h2>
	<hr>
		@if($recetas != null)
	<table>
		<tr>
			<td>Paciente</td>
			<td>Doctor</td>
			<td>Fecha</td>
			<td>Hora</td>
			<td>Peso</td>
			<td>Tratamiento</td>

		</tr>
	
		@foreach($recetas as $r)
		<tr>
			<td>{{$r->nombre}}</td>
			<td>{{$r->doc}}</td>
			<td>{{$r->fecha}}</td>
			<td>{{$r->hora}}</td>
			<td>{{$r->peso}}</td>
			<td>{{$r->tratamiento}}</td>

		</tr>
		@endforeach



	</table>
	@else
		<h2>No hay receta</h2>
	@endif
		

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Informacion del Usuario</title>


</head>
<body>
	<h1>Informacion del Usuario </h1>

	
	<hr>	
	
	<table >
		<tr>
			<td>ID</td>
			<td>Nombre</td>
			<td>Fecha de Consulta</td>
			<td>Hora</td>
			<td>Enfermedad</td>
			<td>Tratamiento</td>
			<td>Doctor</td>
			
		</tr>
	
	
	@foreach($consulta as $h)
		<tr>
				<td>{{$h->id}}</td>
				<td>{{$h->np}}</td>
				<td>{{$h->fecha}}</td>
				<td>{{$h->hora}}</td>
				<td>{{$h->diagnostico}}</td>
				<td>{{$h->tratamiento}}</td>
				<td>{{$h->doc }} {{$h->ap}} {{$h->am}}</td>
							
		</tr>
		@endforeach 
		
		
	</table>

		
</body>
</html>
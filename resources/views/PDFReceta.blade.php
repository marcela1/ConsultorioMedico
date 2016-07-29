<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<p align="left"><img src="imagenes/receta.png" WIDTH=700 HEIGHT=150 ></p><br>	


	<title>Lista de Receta</title>
</head>
<body>
	<h2 ><font color="#1F0A96"><b>Receta Médica</b> </h2>
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
	    <br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center>
	<br><h12><font color="#1F0A96">___________________________</h12>
	<br><h12><font color="#1F0A96"><b>Dra. Ruth Nereyd Ceballos Vega</b></h12>
		

</body>
</html>
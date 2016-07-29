<!DOCTYPE html>
<html lang="en">
<head>
	<p align="left"><img src="imagenes/receta.png" WIDTH=700 HEIGHT=150 ></p>	
	<h2 ><font color="#1364BB"><b>CONSULTORIO MEDICO</b></font></h2>

	<p align="center"><img src="imagenes/historial.jpg" WIDTH=800 HEIGHT=150 ></p>
	<div class="jumbotron">
		<h2 align="center"><font color="#1364BB"><b>CONSULTORIO MEDICO</b></font></h2>
	</div>
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
	<h1>    </h1>
    <h1>    </h1>
    <h1>    </h1>
    <br><h1>    </h1>
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
	<br><h12>___________________________</h12>
	<br><h12>Firma de medico</h12>
	</center>
		
</body>
</html>
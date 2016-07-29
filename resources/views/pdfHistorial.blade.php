<!DOCTYPE html>
<html lang="en">
<head>

	<p align="center"><img src="imagenes/historial.jpg" WIDTH=800 HEIGHT=150 ></p>

</head>
<body>
	<h2 ><font color="#1364BB"><b>Informacion del Usuario</b> </h2>
	
	
<table width="100%"  border="1" cellspacing="0" cellpadding="0" valign="middle">
		<tr class="success">

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
	</table>	
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
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Principal</title>

	<script src="{{asset("js/jquery-2.0.0.min.js")}}"></script>
	<link rel="stylesheet" href="{{ asset("css/bootstrap.css")}}">
     <!-- Datepicker Files -->
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-standalone.css')}}">
    <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
 

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">Consultorio</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{url('/administrador')}}">Registrar <span class="sr-only">(current)</span></a></li>
        <li><a href="{{url('/cita')}}">Registrar Cita</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Opciones <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/mostrarCita')}}">Modificar Citas</a></li>
            <li><a href="{{url('/asignarrequisitos')}}">Requisitos</a></li>
            <li><a href="{{url('/consultarclientes')}}">Clientes</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Mas</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			@yield('encabezado')
			<hr>
			@yield('contenido')
		</div>
	</div>	
<footer class="row">
  <div class="col-xs-12 well text-center">
    <small>ITC Ingeniería Web &copy; 2016</small>
  </div>
</footer>
</div>
<script src="js/jquery-2.0.0.min.js"></script>   
<script src="{{asset("js/bootstrap.js")}}"></script>
</body>
</html>
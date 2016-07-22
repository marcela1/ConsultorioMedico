<!DOCTYPE html>
<html lang="en">
<head>

<div class="jumbotron" style="background: #FFFFFF">

</div>
  <meta charset="UTF-8">
  <title>Principal</title>

	  <link rel="stylesheet" href="{{ asset("js/jquery.js") }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

   
 
    <script src="//code.jquery.com/jquery-2.0.0.min.js"></script>
    <!-- Datepicker Files -->
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-standalone.css')}}">
    <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
 
</head>


<nav class="navbar navbar-inverse navbar-fixed-top" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset("imagenes/s.gif")}}" width="50" height="40" ALIGN="left">Consultorio Medico</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{url('consultarPacientes')}}">Paciente<span class="sr-only">(current)</span></a></li>
        <li><a href="{{url('/administrador')}}">Administrador</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Otros<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/cita')}}">Registrar Citas</a></li>
            <li><a href="{{url('/mostrarCita')}}">Modificar Citas</a></li>
            <li><a href="{{url('/mostrarConsulta')}}">Gestion de Consulta</a></li>
            <li><a href="{{url('/registrarConsulta')}}">Registrar Consulta</a></li>
            <li><a href="{{url('/mostrarHistorial')}}">Historial Clinico</a></li>
            <li class="divider"></li>
            <li><a href="{{url('/registrarReceta')}}">Registrar Receta</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul>
    </div>
  </div>
</nav>

    </div>
  </header>  

      @yield('encabezado')

      @yield('contenido')
  
<footer class="row">
  <div class="col-xs-12 well text-center">
    <small>Consultorio Medico &copy; 2016</small>
  </div>
</footer>
</div>
<script src="{{asset("js/bootstrap.js")}}"></script>


</body>
</html>
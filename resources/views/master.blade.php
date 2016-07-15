<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Principal</title>

  <script src="{{asset("js/jquery.js")}}"></script>
  <link rel="stylesheet" href="{{ asset("css/bootstrap.css")}}">

</head>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">Inicio</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{url('consultarPacientes')}}">Paciente<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Administrador</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Iniciar Sension<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
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
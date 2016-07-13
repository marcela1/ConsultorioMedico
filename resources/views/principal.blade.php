@extends('master')
@section('encabezado')
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="fonts.css">

@section('contenido')
<h1 <p class="text-primary">Bienvenido</p></h1>
<div class="main">
	<div class="slides">
		<img src="imagenes/6.jpg" alt="">
		<img src="imagenes/5.jpg" alt="">
		<img src="imagenes/3.jpg" alt="">

	</div>

</div>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="js/jquery.slides.js"></script>
<script >
$(function(){

  $(".slides").slidesjs({
  	   
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 5000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});
</script>



<div class="jumbotron">
  <h1>/h1>
  <p>Este es un sistema para gestionar proyectos, registrando y asignando usuarios a proyctos.
   A los proyectos se le asigna requisitos, entre otras cosas.</p>
  <p><a class="btn btn-primary btn-lg">Leer mas</a></p>
</div>

@stop
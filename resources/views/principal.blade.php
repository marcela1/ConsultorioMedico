@extends('master')
@section('encabezado')
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="fonts.css">
  
@section('contenido')

<div class="main">
	<div class="slides">
		<img src="imagenes/5.jpg" alt="">
		<img src="imagenes/6.jpg" alt="">
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



<div class="jumbotron" style="background: #EFF2F4">
<img src="imagenes/PERSONAS-SIN-FONDO.png" width="100" height="100" ALIGN="left"></a>
<h1 <p class="text-primary">Quienes somos</p></h1>
  <p>Somos un equipo de desarrollo web encargado de realizar paginas con un alto nivel de calidad facilitando 
    el trabajo diario de los usuarios activos</p>
</div>

<div class="form-group, col-xs-6">

<div class="jumbotron" style="background: #EFF2F4">
<blockquote>
<h1 <p class="text-primary">Mision</p></h1>
<p  style="color: #1C81AC margin-left:30px"> Nuestra misión como empresa de Desarrollo Web es ofrecer soluciones de Negocios que impulsen
al cliente en su incursión al mundo de la Internet, a través de un servicio de alta calidad,
tecnología confiable, con diseño de vanguardia, y un Equipo de Trabajo con espíritu de servicio.</p>
</blockquote>
</div>
</div>
<div class="form-group, col-xs-6">

<div class="jumbotron" style="background: #EFF2F4">
<blockquote class="blockquote-reverse">
<h1 <p class="text-primary">Vision</p></h1>
<p>Tenemos proyectado ser la mejor alternativa en desarrollo Web para el clientes que 
busca explotar las oportunidades que Internet le ofrece para impulsar su Negocio, 
en donde nuestra Calidad se refleje en una excelente relación con nuestros Clientes, 
y donde nuestra prosperidad se comparta entre nuestros Empleados y Proveedores.</p>
</blockquote>
</div>
</div>

<h1 <p class="text-primary">_____________________________________________</p></h1>



<h1 <p class="text-primary">Contactanos</p></h1>

<form class="form-horizontal">
  <fieldset>
    <legend></legend>
    <div class="form-group">
      <label for="Nombre" class="col-lg-2 control-label">Nombre:</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="Nombre" placeholder="Nombre">
      </div>
    </div>
    <div class="form-group">
      <label for="Correo Electronico" class="col-lg-2 control-label">Correo Electronico:</label>
      <div class="col-lg-10">
        <input type="Correo Electronico" class="form-control" id="inputPassword" placeholder="Correo Electronico">
      </div>
    </div>
    <div class="form-group">
      <label for="Mensaje" class="col-lg-2 control-label">Mensaje:</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="Mensaje"></textarea>
        <span class="help-block">Descripción del mensaje</span>
      </div>
    </div>
    

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">

        <button type="reset" class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>

      </div>
    </div>
  </fieldset>
</form>

<div class="jumbotron" style="background: #FFFFFF">

</div>

<center>
<div class="form-group, col-xs-4">
<a href="https://www.google.com.mx/maps/place/Gral.+Ignacio+Ram%C3%ADrez+157A,+Jorge+Almada,+80200+Culiac%C3%A1n+Rosales,+Sin./@24.7983961,-107.3974164,17z/data=!4m13!1m7!3m6!1s0x86bcd0ba2fb260eb:0xb807cf02c2864316!2sGral.+Ignacio+Ram%C3%ADrez,+Jorge+Almada,+Culiac%C3%A1n+Rosales,+Sin.!3b1!8m2!3d24.7979368!4d-107.4002599!3m4!1s0x86bcd0b0b72cd379:0xef3ce56b3a5b2084!8m2!3d24.7982894!4d-107.395601"><img src="imagenes/menuabajo_dom_2049.png" width="70" height="70" ALIGN="left"></a>
<h6>Calle Igncio Ramirez No. 157 poniente
Col. Jorge Almada, Culiacan Sinaloa. C.P. 80200</h6>
</div>
<div class="form-group, col-xs-4">
<a href=""><img src="imagenes/Icon_Mail.png" width="70" height="70" ALIGN="left"></a>
<h6>webdisigner@gmail.com</h6>
</div>
<div class="form-group, col-xs-4">
<a href=""><img src="imagenes/icono-telefono-copia.gif" width="70" height="70" ALIGN="left"></a>
<h6>Celular:</h6>
<h6>(667) 2 - 64 - 68 - 98</h6>
</div>
</center>

@stop
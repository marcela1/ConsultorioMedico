@extends('master')
@section('encabezado')
<div class="jumbotron" style="background: #2878C2;height:150px;">

<h1><img src="imagenes/registro.png" width="85" height="82" ALIGN="left"><font color="White" face="verdana">Login</font></h1>
</div>

@stop
@section('contenido')
<center>


<!-- resources/views/auth/login.blade.php -->
 
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}
 
    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>
 
    <div>
        Password
        <input type="password" name="password" id="password">
    </div>
 
    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>
 
    <div>
        <button type="submit">Login</button>
    </div>
</form>

</center>
@stop
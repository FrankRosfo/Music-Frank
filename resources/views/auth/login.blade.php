@extends('template.sesion')
@section('Logotipo2')
<a class="navbar-brand" href="login" ><h2>Music-Frank<em>.</em></h2></a>
@endsection
@section('Barra2')
<li class="nav-item">
  <a class="nav-link" href="/registro">Registrarse</a>
</li>
@endsection
@section('Descript')
<h4>Login</h4>
<h2>¡Bienvenido!</h2>
@endsection
@section('Form')
<div class="sidebar-heading">
    <h2 style="text-align:center">Login</h2>
</div>
<div class="content">
    <form action="login" method="post">
        @csrf
        <div class="login">
            <div class="col-xs-12 col-sm-12">
                <fieldset>
                    <input name="email" type="email" id="email" placeholder="Correo" required="">
                </fieldset>
            </div>
            <div class="col-xs-12 col-sm-12">
                <fieldset>
                    <input name="password" type="password" id="password" placeholder="Contraseña" required="">
                </fieldset>
            </div>
            @error('message')
            <div class="col-xs-12 col-sm-12" >
                <fieldset>
                    <h4>*{{$message}}</h4>
                </fieldset>
            </div>
            @enderror
            <div class="col-xs-12 col-lg-12">
                <fieldset>
                    <button type="submit" id="form-submit" class="main-button" style="center">Ingresar</button>
                </fieldset>
            </div>
        </div>
    </form>
</div>
@endsection
@section('Js2')
    <script>
        function mostrarContrasena(){
            var tipo = document.getElementById("password");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }
    </script>
@endsection

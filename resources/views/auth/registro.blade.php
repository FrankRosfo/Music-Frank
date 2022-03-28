@extends('template.sesion') {{-- HOME SESION --}}
@section('Logotipo2')
<a class="navbar-brand" href="/registro" ><h2>Music-Frank<em>.</em></h2></a>
@endsection
@section('Barra2')
<li class="nav-item">
  <a class="nav-link" href="login">Iniciar Sesi&oacute;n</a>
</li>
@endsection
@section('Descript')
<h4>Registro</h4>
<h2>¡Bienvenido!</h2>
@endsection
@section('Form')
<div class="sidebar-heading">
    <h2 style="text-align:center">Registro</h2>
</div>
<div class="content">
    <form action="/registro" method="post">
        @csrf
        <div class="login">
            <div class="col-sm-12">
                <fieldset>
                    <input name="name" type="text" id="name" placeholder="Nombre" required="">
                </fieldset>
            </div>
            <div class="col-sm-12">
                <fieldset>
                    <input name="email" type="email" id="email" placeholder="Correo" required="">
                </fieldset>
            </div>
            <div class="col-sm-12">
                <fieldset>
                    <input name="password" type="password" id="password" placeholder="Contraseña" required="">
                </fieldset>
            </div>
            <div class="col-lg-12">
                <fieldset>
                    <button type="submit" id="form-submit" class="main-button">Registrarse</button>
                </fieldset>
            </div>
        </div>
    </form>
</div>
@endsection
@section('Js2')

<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
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

@extends('template.fondo')
@section('css')
    @livewireStyles
@endsection
@section('Logotipo')
<a class="navbar-brand" href="{{ route('inicio') }}" ><h2>Music-Frank<em>.</em></h2></a>
@endsection
@section('Barra')
<li class="nav-item">
  <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="{{ route('api') }}">API</a>
    <span class="sr-only">(current)</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('login.destroy') }}">Cerrar Sesi&oacute;n</a>
</li>
@endsection

@section('Contenido')
@if(auth()->check())
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-content">
            <h4>API</h4>
            <h2>Api de Identificacion de Nombres</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<section class="blog-posts grid-system">
  <div class="container">
    <div class="api">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="api">
            <div class="col-lg-12">
              <div class="sidebar-item submit-comment">
                <div class="sidebar-heading">
                  <h2>Probabilidad de Nacionalidad</h2>
                </div>
                <livewire:api />
              </div>
            </div>
            <livewire:coment />
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="api">
            <div class="col-lg-12">
              <div class="sidebar-item categories">
                <div class="sidebar-heading">
                  <h2>Trabajos Realizados</h2>
                </div>
                <div class="content">
                  <ul>
                    <li><a href="#">- Hobbies/F</a></li>
                    <li><a href="#">- Uso Orientado a Objetos</a></li>
                    <li><a href="#">- Juego Clasico</a></li>
                    <li><a href="#">- QSMN/F</a></li>
                    <li><a href="#">- Batalla Naval</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item tags">
                <div class="sidebar-heading">
                  <br>
                  <br>
                  <h2>Lenguajes de Programación</h2>
                </div>
                <div class="content">
                  <ul>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">JavaScript</a></li>
                    <li><a href="#">Php</a></li>
                    <li><a href="#">C++</a></li>
                    <li><a href="#">C#</a></li>
                    <li><a href="#">Laravel</a></li>
                    <li><a href="#">C</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif
@endsection
@section('Js')
    @livewireScripts
@endsection

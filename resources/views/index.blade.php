@if(auth()->check())
@extends('template.fondo')
@section('css')
    @livewireStyles
@endsection
@section('Logotipo')
    <a class="navbar-brand" href="{{ route('inicio') }}" ><h2>Music-Frank<em>.</em></h2></a>
@endsection
@section('Barra')
<li class="nav-item active">
    <a class="nav-link" href="{{ route('inicio') }}">Inicio
        <span class="sr-only">(current)</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('api') }}">API</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('login.destroy') }}">Cerrar Sesi&oacute;n</a>
</li>
@endsection
@section('Contenido')
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="main-banner header-text">
    <div class="container-fluid">
        <div class="owl-banner owl-carousel">
            <div class="item">
                <img src="/storage/imagenes/Dragons 1.jpg" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Imagine Dragons</span>
                        </div>
                        <a><h4>Excelente Musica</h4></a>
                        <ul class="post-info">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/storage/imagenes/Dragons 2.jpg" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Imagine Dragons</span>
                        </div>
                        <a><h4>API de Uso</h4></a>
                        <ul class="post-info">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/storage/imagenes/Dragons 3.jpg" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Imagine Dragons</span>
                        </div>
                        <a><h4>Pasando el Cuatri</h4></a>
                        <ul class="post-info">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/storage/imagenes/Dragons 4.jpg" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Imagine Dragons</span>
                        </div>
                        <a><h4>Lolcito XDXD</h4></a>
                        <ul class="post-info">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/storage/imagenes/Dragons 5.jpg" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Imagine Dragons</span>
                        </div>
                        <a><h4>Music: Alternativa</h4></a>
                        <ul class="post-info">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/storage/imagenes/Dragons 6.jpg" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Imagine Dragons</span>
                        </div>
                        <a><h4>Buena Banda</h4></a>
                        <ul class="post-info">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog-posts">
    <div class="container">
        <livewire:general />
    </div>
</section>
@endsection
@section('Js')
    @livewireScripts
@endsection
@endif

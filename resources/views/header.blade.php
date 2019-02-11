<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ICAPTU</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/lightgallery.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/timelinev.css') }}" rel="stylesheet" type="text/css">


    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.ico')}}" />

</head>
<body>

    <nav id='flexmenu' class="head nav">
        <div class="logo">
            <a href=""><img class="logo__img" src="{{ asset('img/logo.png')}}" alt=""></a>
        </div>
        <div id="mobile-toggle" class="button"></div>
        <ul id="main-menu">
            <li class='active'><a href='{{ url('/') }}'>Inicio</a></li>
            <li><a href='{{ url('/nosotros') }}'>Icaptu</a></li>
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Playas</a>
                <ul class="dropdown-menu">
                    <li  class="dropdown-submenu li_menu">
                        <a href="#">Indicadores</a>
                        <ul class="dropdown-menu" style="margin-top:0rem;">
                            <li class="li_menu" style="margin:0 .5rem"><a class="link_menu" href="#">Calidad ambiental sanitaria</a></li>
                            <li class="li_menu" style="margin:0 .5rem"><a class="link_menu" href="#">Calidad ambiental recreativa</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href='#'>Alianzas</a></li>
            <li><a href='#'>Investigadores</a></li>
            <li><a href='#'>Eventos</a></li>
            <li><a href='#'>Contacto</a></li>
        </ul>
    </nav>



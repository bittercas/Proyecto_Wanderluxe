<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/eiffel.jpg') }}">
    <!--Estilos y fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/intento.css') }}">
    <title>WanderLuxe</title>
</head>
<body>
<!--Menú de navegación-->
 <section id="inicio">
    <nav>
        <ul>
            <li class="bloque"><a class="enlacesInicio" href="#portada">Inicio</a></li>
            <li class="bloque dropdown">
                 <a class="enlacesInicio" id="destinos" href="{{ route('opciones') }}">Destinos</a>
                <ul class="menu">
                    <li><a id="america" href="{{ route('europa') }}">Destinos por Continente</a></li>
                    <li><a id="ciudades" href="{{ route('ciudades') }}">Ciudades con Encanto</a></li>
                    <li><a id="playas" href="{{ route('aventuras') }}">Aventuras y Naturaleza</a></li>
                </ul>
            </li>
            <li class="bloque"><a class="enlacesInicio" href="#nosotros">Nosotros</a></li>
            <li class="bloque"><a class="enlacesInicio" href="#islaPascua">Top Picks 2025</a></li>
            <li class="bloque"><a class="enlacesInicio" id="inicioSesion" href="{{ route('login') }}">Iniciar sesión</a></li>
        </ul>
    </nav>
</section>
<!--Función para traer los textos y rutas de imágenes del carrusel de la base de datos-->
<section id="portada" class="fondo">
    <div class="carrusel">
        <ul>
        @foreach ($carruseles as $carrusel)
            <li>
            <img class="mejora_imagen" src="{{ asset('img/' . $carrusel->imagen) }}" alt="Nueva York">
                <div class="info_primera_pagina">
                    <h1>{{ $carrusel->titulo }}</h1>
                    <p>{{ $carrusel->parrafo }}</p>
                </div>
            </li>
        @endforeach
        </ul>
    </div>
</section>
<!--Función para traer los párrafos específicos y todos los registros de para el inicio de la web desde la base de datos-->
<section class="intro">
    <h1 class="header_intro">{{ $parrafos->firstWhere('id', 1)?->introduccion }}</h1><br>
    <div class="caja1">
    <p class="para_intro">{{ $parrafos->firstWhere('id', 1)?->parrafo }}</p>
    </div>
</section>
<section id="nosotros">
@foreach ($intros as $index => $intro)
    @if ($index === 0)
    <div class="caja2">
        <img class="foto-1" src="{{ asset('img/uzbekistan.jpg') }}" alt="Uzbekistán">
        <h1 class="titulos">{{ $intro->titulo }}</h1>
         <p class="color_parrafos">{{ $intro->descripcion }}</p>
    </div>
    @elseif ($index === 1)
    <div class="caja3">
        <img class="foto-2" src="{{ asset('img/elefante.jpg') }}" alt="Elefante">
        <h1 class="titulos">{{ $intro->titulo }}</h1>
        <p class="color_parrafos">{{ $intro->descripcion }}</p>
    </div>
    @endif
@endforeach
</section>
<!--Función para traer todos los registros de <top2025> de la base de datos-->
<section id="islaPascua">
    <h1 class="header_isla">Recomendaciones 2025.</h1><br>
    <p class="caja1">{{ $parrafos->firstWhere('id', 2)?->parrafo }}</p>
    <div class="contenedor-destinos">
    @foreach ($destinos as $destino)
        <div class="tarjeta-destinos">
        <div class="imagen">
            <img src="{{ asset('img/' . $destino->imagen) }}" alt="{{ $destino->titulo }}">
        </div>
        <h3>{{ $destino->titulo }}</h3>
        <p>{{ $destino->descripcion }}</p>
        </div>
    </div>
        @endforeach
    </div>
</section>
<!--Footer-->
<footer class="footer">
    <div class="final">
        <div class="secciones_footer">
            <div class="izquierda">
                <h4>Descubre</h4>
                <ul>
                    <li><a class="enlacesInicio" href="#portada">Inicio</a></li>
                    <li><a class="enlacesInicio" id="destinos_footer" href="{{ route('opciones') }}">Destinos</a></li>
                    <li><a class="enlacesInicio" href="#nosotros">Nosotros</a></li>
                    <li><a class="enlacesInicio" href="#islaPascua">Top Picks 2025</a></li>
                </ul>
            </div>
            <div class="derecha">
                <h4>Información</h4>
                <ul>
                    <li>&copy; 2025 WanderLuxe. Todos los derechos reservados.</li>
                    <li>Instagram: @bittercastro</li>
                    <li>Email: vithercj@gmail.com</li>
                    <li>Síguenos para más inspiración cada día</li>
                </ul>
            </div>
            <div class="derecha">
                <p></p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
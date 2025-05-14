<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/intento.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sesioniniciada.css') }}">
    <title>WanderLuxe</title>
</head>
<body>
    <section id="inicio">
        <nav>
            <ul>
                <li class="bloque"><a class="enlacesInicio" href="#portada">Inicio</a></li>
                <li class="bloque"><a class="enlacesInicio" href="{{ route('planificar') }}">Planificar Mi Viaje</a></li>
                <li class="bloque"><a class="enlacesInicio" href="{{ route('mostrarViajes') }}">Mis Viajes</a></li>
                <li class="bloque"><a class="enlacesInicio" href="{{ route('mapa') }}">Mapa</a></li>
                <li class="bloque"><a class="enlacesInicio" id="cerrar" href="{{ route('logout') }}">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </section>
    <section id="videoPortada">
        <video autoplay muted loop>
            <source src="{{ asset('videos/privado.mp4') }}" type="video/mp4">
        </video>
        <div class="info_primera_pagina">
            <h2 class="entrada">Qué bueno tenerte de vuelta, {{ auth()->user()->name }}.</h2>
        </div>
    </section>
    <footer class="footer">
        <div class="final">
            <div class="secciones_footer">
                <div class="izquierda">
                    <h4>Descubre</h4>
                    <ul>
                        <li><a class="enlacesInicio" href="#portada">Inicio</a></li>
                        <li><a class="enlacesInicio" id="destinos_footer" href="#destinos">Destinos</a></li>
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
            </div>
        </div>
    </footer>
    <!--<script src="{{ asset('sesioniniciada.js') }}"></script>-->
    <script src="js/index.js"></script>
</body>
</html>
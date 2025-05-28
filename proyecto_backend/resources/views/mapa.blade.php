<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/eiffel.jpg') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mapa</title>
    <!--Estilos y fuentes-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link rel="stylesheet" href="{{ asset('css/intento.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mostrar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mapa.css') }}">
</head>
<body>
    <!--Menú de navegación-->
    <section id="inicio">
        <nav>
            <ul>
                <li class="bloque"><a class="enlacesInicio" href="{{ route('privada') }}">Inicio</a></li>
                <li class="bloque"><a class="enlacesInicio" href="{{ route('planificar') }}">Planificar Mi Viaje</a></li>
                <li class="bloque"><a class="enlacesInicio" href="{{ route('mostrarViajes') }}">Mis Viajes</a></li>
                <li class="bloque"><a class="enlacesInicio" id="cerrar" href="{{ route('logout') }}">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </section>
    <div id="buscador_mapa">
        <input type="text" id="busqueda" placeholder="Buscar">
        <button id="boton_busqueda"><i class="fa fa-search"></i></button>
    </div>
    <div id="mapa"></div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <!--Footer-->
    <footer class="footer">
        <div class="final">
            <div class="secciones_footer">
                <div class="izquierda">
                    <h4>Descubre</h4>
                    <ul>
                        <li><a class="enlacesInicio" href="{{ route('privada') }}">Inicio</a></li>
                        <li><a class="enlacesInicio" id="destinos_footer" href="{{ route('planificar') }}">Planificar Mi Viaje</a></li>
                        <li><a class="enlacesInicio" href="{{ route('mostrarViajes') }}">Mis Viajes</a></li>
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
    <!--Scripts-->
    <script src="{{ asset('js_boot/jquery.min.js') }}"></script>
    <script src="{{ asset('js_boot/popper.js') }}"></script>
    <script src="{{ asset('js_boot/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js_boot/main.js') }}"></script>
    <script src="{{ asset('js/mostrar.js') }}"></script>
    <script src="{{ asset('js/mapa.js') }}"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
</body>
</html>
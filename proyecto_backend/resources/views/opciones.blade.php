<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Destinos</title>

    <!-- Fuentes y estilos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/intento.css') }}">
    <link rel="stylesheet" href="{{ asset('css/opciones.css') }}">
</head>
<body>

<!-- NAV -->
<section id="inicio">
        <nav>
            <ul>
                <li class="bloque"><a class="enlacesInicio" href="{{ route('inicio') }}">Inicio</a></li>
                <li class="bloque dropdown">
                    <a class="enlacesInicio" id="destinos" href="{{ route('opciones') }}">Destinos</a>
                    <ul class="menu">
                        <li><a id="america" href="{{ route('europa') }}">Destinos por Continente</a></li>
                        <li><a id="ciudades" href="{{ route('ciudades') }}">Ciudades con Encanto</a></li>
                        <li><a id="playas" href="{{ route('aventuras') }}">Aventuras y Naturaleza</a></li>
                    </ul>
                </li>
                <li class="bloque"><a class="enlacesInicio" id="inicioSesion" href="{{ route('login') }}">Iniciar sesión</a></li>
            </ul>
        </nav>
    </section>
<section id="opciones" class="opciones-section">
    <h2 class="opciones-seccion">Descubre los mejores destinos para este 2025</h2>
    <div class="contenedor-opciones">
        @foreach ($opciones as $opcion)
        <div class="tarjeta-opciones">
            <h3>{{ $opcion->titulo }}</h3>
            <img class="opciones-imagen" src="{{ asset('img/' . $opcion->imagen) }}" alt="{{ $opcion->titulo }}">
            <p>{{ $opcion->descripcion }}</p>
            <div class="botones">
            <button class="boton" data-id="{{ $opcion->id }}">Descubrir</button>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="final">
        <div class="secciones_footer">
            <div class="izquierda">
                <h4>Descubre</h4>
                <ul>
                    <li><a class="enlacesInicio" href="#portada">Inicio</a></li>
                    <li><a class="enlacesInicio" id="destinos_footer" href="#destinos">Destinos</a></li>
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
        </div>
    </div>
</footer>

<!-- Scripts -->
@php
    $rutas = [
        'europa' => route('europa'),
        'ciudades' => route('ciudades'),
        'aventuras' => route('aventuras'),
    ];
@endphp

<!-- Scripts -->
<script>
    const rutas = @json($rutas);
</script>
<script src="{{ asset('js_boot/jquery.min.js') }}"></script>
<script src="{{ asset('js_boot/popper.js') }}"></script>
<script src="{{ asset('js_boot/bootstrap.min.js') }}"></script>
<script src="{{ asset('js_boot/main.js') }}"></script>
<script src="{{ asset('js/opciones.js') }}"></script>

</body>
</html>
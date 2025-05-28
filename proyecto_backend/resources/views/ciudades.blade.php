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
    <link rel="stylesheet" href="{{ asset('css/textos.css') }}">
    <title>Ciudades con Encanto</title>
</head>
<body>
    <!--Menú de navegación-->
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
    <section>
        <div>
            <ul>
                <li>
                    <img class="mejora_imagen" src="img/shang.jpg" alt="Europa">
                    <div class="info_textos">
                        <h1 class="texto_europa">Ciudades con Encanto</h1>
                    </div>
                </li>
            </ul>
    </section>
    <!--Función para traer los párrafos específicos y todos los registros de <ciudades> de la base de datos-->
    <section id="islaPascua">
        <h1 class="header_isla">{{ $parrafos->firstWhere('id', 4)?->introduccion }}</h1><br>
        <p class="caja1">{{ $parrafos->firstWhere('id', 4)?->parrafo }}</p>
        <div class="contenedor-destinos">
        @foreach ($ciudades as $ciudad)
            <div class="tarjeta-destinos">
            <div class="imagen">
                <img src="{{ asset('img/' . $ciudad->imagen) }}" alt="{{ $ciudad->titulo }}">
            </div>
            <h3>{{ $ciudad->titulo }}</h3>
            <p>{{ $ciudad->descripcion }}</p>
            </div>
        </div>
        @endforeach
    </section>
    <!--Footer-->
    <footer class="footer">
        <div class="final">
            <div class="secciones_footer">
                <div class="izquierda">
                    <h4>Descubre</h4>
                    <ul>
                        <li><a href="{{ route('inicio') }}">Inicio</a></li>
                        <li><a id="destinos_footer" href="{{ route('opciones') }}">Destinos</a></li>
                        <li><a id="destinos_footer" href="{{ route('inicio') }}#nosotros">Nosotros</a></li>
                        <li><a id="destinos_footer" href="{{ route('inicio') }}#islaPascua">Top Picks 2025</a></li>
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
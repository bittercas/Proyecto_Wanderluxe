<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mis Viajes</title>

    <!-- Fuentes y estilos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/intento.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/intento.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mostrar.css') }}">
</head>
<body>

<!-- NAV -->
<section id="inicio">
        <nav>
            <ul>
                <li class="bloque"><a class="enlacesInicio" href="#portada">Inicio</a></li>
                <li class="bloque dropdown">
                    <a class="enlacesInicio" id="destinos" href="{{ route('destinos') }}">Destinos</a>
                    <ul class="menu">
                        <li><a id="america" href="{{ route('europa') }}">Destinos por Continenete</a></li>
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
<section id="viajes" class="viajes-section">
    <h2 class="titulo-seccion">Mis Viajes</h2>
    <div class="contenedor-viajes">
        @foreach ($viajes as $viaje)
        <div class="tarjeta-viaje">
            <h3>{{ $viaje->destino }}</h3>
            <p><strong>Inicio:</strong> {{ $viaje->inicio }}</p>
            <p><strong>Fin:</strong> {{ $viaje->fin }}</p>
            <p><strong>Descripción:</strong> {{ $viaje->descripcion }}</p>
            <p><strong>Presupuesto:</strong> ${{ $viaje->presupuesto }}</p><br>
            <div class="botones">
            <button class="botonEditar" data-id="{{ $viaje->id }}">Editar</button>
            <form action="{{ route('eliminarViaje', $viaje->id) }}" method="POST" data-url="{{ route('eliminarViaje', $viaje->id) }}">
                @csrf 
                @method('DELETE') 
                <button class="botonEliminar" type="button">Eliminar</button>
            </form>
            </div>
            <!--<button class="botonEditar">Editar</button>
            <button class="botonBorrar">Eliminar</button>-->
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
                    <li><a class="enlacesInicio" href="{{ route('inicio') }}#nosotros">Nosotros</a></li>
                    <li><a class="enlacesInicio" href="{{ route('inicio') }}#islaPascua">Top Picks 2025</a></li>
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
<script src="{{ asset('js_boot/jquery.min.js') }}"></script>
<script src="{{ asset('js_boot/popper.js') }}"></script>
<script src="{{ asset('js_boot/bootstrap.min.js') }}"></script>
<script src="{{ asset('js_boot/main.js') }}"></script>
<script src="{{ asset('js/mostrar.js') }}"></script>

</body>
</html>
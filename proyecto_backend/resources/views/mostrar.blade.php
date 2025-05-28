<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/eiffel.jpg') }}">
    <title>Mis Viajes</title>
    <!--Estilos y fuentes-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/intento.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mostrar.css') }}">
</head>
<body>
<!--Menú de navegación-->
<section id="inicio">
     <nav>
         <ul>
            <li class="bloque"><a class="enlacesInicio" href="{{ route('privada') }}">Inicio</a></li>
            <li class="bloque"><a class="enlacesInicio" href="{{ route('planificar') }}">Planificar Mi Viaje</a></li>
            <li class="bloque"><a class="enlacesInicio" href="{{ route('mapa') }}">Mapa</a></li>
            <li class="bloque"><a class="enlacesInicio" id="cerrar" href="{{ route('logout') }}">Cerrar Sesión</a></li>
        </ul>
    </nav>
</section>
<!--Función para traer todos los viajes de un usuario de la base de datos-->
<section id="viajes" class="seccion_viajes">
     <h2 class="titulo_seccion">Mis Viajes</h2>
    @if($mensaje)
    <div class="mensaje">
        {{ $mensaje }}
    </div>
    @endif
    <div class="contenedor_viajes">
        @foreach ($viajes as $viaje)
        <div class="tarjeta_viaje">
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
        </div>
        @endforeach
    </div>
</section>
<!--Footer-->
<footer class="footer_mostrar">
     <div class="final">
         <div class="secciones_footer_mostrar">
            <div class="izquierda_mostrar">
                 <h4>Descubre</h4>
                <ul>
                    <li><a class="enlacesInicio" href="{{ route('privada') }}">Inicio</a></li>
                    <li><a class="enlacesInicio" id="destinos_footer" href="{{ route('planificar') }}">Planificar Mi Viaje</a></li>
                    <li><a class="enlacesInicio" href="{{ route('mapa') }}">Mapa</a></li>
                </ul>
            </div>
            <div class="derecha_mostrar">
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
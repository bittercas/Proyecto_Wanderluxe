<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/eiffel.jpg') }}">
    <title>Planificar Mi Viaje</title>
    <!--Estilos y fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css_bootstrap/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/intento.css') }}">
    <link rel="stylesheet" href="{{ asset('css/editar.css') }}">
</head>
<body>
<!--Menú de navegación-->
<section id="inicio">
    <nav>
        <ul>
            <li class="bloque"><a class="enlacesInicio" href="{{ route('privada') }}">Inicio</a></li>
            <li class="bloque"><a class="enlacesInicio" href="{{ route('planificar') }}">Planificar Mi Viaje</a></li>
            <li class="bloque"><a class="enlacesInicio" href="{{ route('mostrarViajes') }}">Mis Viajes</a></li>
            <li><a class="enlacesInicio" href="{{ route('mapa') }}">Mapa</a></li>
            <li class="bloque"><a class="enlacesInicio" id="cerrar" href="{{ route('logout') }}">Cerrar Sesión</a></li>
        </ul>
    </nav>
</section>
<!--Formulario de edición de viaje-->
<section id="nosotros" class="ftco-section">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 mb-4 mb-md-0 text-center imagen-fotografo">
                <img class="img-fluid" src="{{ asset('img/fotografo.jpg') }}" alt="Planificar" style="max-width: 70%; height: auto; border-radius: 15px;">
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <h2 class="mb-4 text-center texto-header">Modifiquemos tu viaje.</h2>
                    <form method="POST" action="{{ route('actualizarViaje', $viaje->id) }}" id="formulario" class="signin-form">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input type="text" id="destino" name="destino" value="{{ old('destino', $viaje->destino) }}" class="form-control" placeholder="Destino" required>
                            <p id="verificar-correo"></p>
                        </div>
                        <div class="form-group">
                            <p>Fecha de Inicio</p>
                            <input type="date" id="fInicio" name="inicio" value="{{ old('inicio', $viaje->inicio) }}" class="form-control"required>
                            <p id="verificar-correo"></p>
                        </div>
                        <div class="form-group">
                            <p>Fecha de Fin</p>
                            <input type="date" id="fin" name="fin" value="{{ old('fin', $viaje->fin) }}" class="form-control" required>
                            <p id="verificar-correo"></p>
                        </div>
                        <div class="form-group">
                            <textarea id="descripcion" name="descripcion" class="form-control" rows="4" cols="50" placeholder="Descripción" required>{{ old('descripcion', $viaje->descripcion) }}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" id="presupuesto" name="presupuesto" value="{{ old('presupuesto', $viaje->presupuesto) }}" class="form-control" placeholder="Presupuesto" required>
                            <p id="verificar-correo"></p>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Footer-->
<footer class="footer">
    <div class="final">
        <div class="secciones_footer">
            <div class="izquierda">
                <h4>Descubre</h4>
                <ul>
                    <li><a class="enlacesInicio" href="{{ route('privada') }}">Inicio</a></li>
                     <li><a class="enlacesInicio" id="destinos_footer" href="{{ route('planificar') }}">Planificar Mi Viaje</a></li>
                     <li class="bloque"><a class="enlacesInicio" href="{{ route('mostrarViajes') }}">Mis Viajes</a></li>
                     <li><a class="enlacesInicio" href="{{ route('mapa') }}">Mapa</a></li>
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
</body>
</html>
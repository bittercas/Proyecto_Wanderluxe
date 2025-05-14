<!doctype html>
<html lang="es">
  <head>
  	<title>Iniciar Sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('css_bootstrap/style.css') }}">

	<link rel="stylesheet" href="{{ asset('css/intento.css') }}">

	</head>
	<body class="img js-fullheight" style="background-image: url(../../img/capa.jpg);">

    <!-- Menú de navegación -->
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
                <li class="bloque"><a class="enlacesInicio" id="inicioSesion" href="{{ route('registrarse') }}">Registrarse</a></li>
            </ul>
        </nav>
    </section>

    <!-- Contenido del login -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Iniciar Sesión</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">¿Ya tienes una cuenta?</h3>
                        <form method="POST" action="{{ route('iniciar.sesion') }}" id="formulario" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" id="correo" name="email" class="form-control" placeholder="Correo" required>
                                <p id="verificar-correo"></p>
                            </div>
                            <div class="form-group">
                                <input id="password-field" name="password" type="password" class="form-control" placeholder="Contraseña" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <p id="verificar-contra"></p>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Ingresar</button>
                            </div>
                            @if (session('error'))
                            <div class="d-flex justify-content-center mt-3">
                            <div class="alert alert-danger text-center">
                                {{ session('error') }}
                            </div>
                            </div>
                            @endif
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                </div>
                                <div class="w-50 mx-auto text-md-right">
                                    <a class="hover_enlace" href="{{ route('registrarse') }}" style="color: #fff">Registrate aquí.</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<footer class="footer_ingreso">
        <div class="final">
            <div class="secciones_footer_ingreso">
                <div class="izquierda_ingreso">
                    <h4>Descubre</h4>
                    <ul>
                        <li><a href="{{ route('inicio') }}">Inicio</a></li>
                        <li><a id="destinos_footer" href="{{ route('opciones') }}">Destinos</a></li>
                        <li><a id="destinos_footer" href="{{ route('inicio') }}#nosotros">Nosotros</a></li>
                        <li><a id="destinos_footer" href="{{ route('inicio') }}#islaPascua">Top Picks 2025</a></li>
                    </ul>
                </div>
                <div class="derecha_ingreso">
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

    <script src="{{ asset('js/sesion.js') }}"></script>

    <!--<script>
        var iniciarSesionUrl = "{{ route('iniciar.sesion') }}";
    </script>-->

    <!-- Scripts -->
    <script src="{{ asset('js_boot/jquery.min.js') }}"></script>
    <script src="{{ asset('js_boot/popper.js') }}"></script>
    <script src="{{ asset('js_boot/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js_boot/main.js') }}"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const dropdown = document.querySelector('.dropdown_resgistro');
        const menu = dropdown?.querySelector('.menu');

        if (dropdown && menu) {
            dropdown.addEventListener('mouseenter', () => {
                menu.style.display = 'block';
            });

            dropdown.addEventListener('mouseleave', () => {
                menu.style.display = 'none';
            });
        }
    });
</script>
</body>
</html>


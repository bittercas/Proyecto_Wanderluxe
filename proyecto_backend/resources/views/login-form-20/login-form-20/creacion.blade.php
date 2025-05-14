<!doctype html>
<html lang="es">
  <head>
  	<title>Registrarse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/intento.css') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css_bootstrap/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/intento.css') }}">
    <link rel="stylesheet" href="{{ asset('css/creacion.css') }}">

	</head>
	<body class="img js-fullheight" style="background-image: url(../../img/osaka.jpg);">

    <!-- Menú de navegación -->
    <section id="inicio_resgistro">
        <nav>
            <ul>
                <li class="bloque_resgistro"><a class="enlacesInicio_resgistro" href="{{ route('inicio') }}">Inicio</a></li>
                <li class="bloque dropdown_resgistro">
                    <a class="enlacesInicio_resgistro" id="destinos" href="destinos.html">Destinos</a>
                    <ul class="menu">
                        <li><a id="america" href="{{ route('europa') }}">Destinos por Continente</a></li>
                        <li><a id="ciudades" href="{{ route('ciudades') }}">Ciudades con Encanto</a></li>
                        <li><a id="playas" href="{{ route('aventuras') }}">Aventuras y Naturaleza</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </section>

    <!-- Contenido del login -->
    <section class="ftco-section">
        <h1 class="exito">¡Usuario creado con éxito!</h1><br>
        <h4 class="volver" ><a href="{{ route('login') }}">Ir a inicio de sesión</a></h4>
    </section>
	<footer class="footer_ingreso">
        <div class="final">
            <div class="secciones_footer_ingreso">
                <div class="izquierda_ingreso">
                    <h4>Descubre</h4>
                    <ul>
                        <li><a href="{{ route('inicio') }}">Inicio</a></li>
                        <li><a id="destinos_footer" href="destinos.html">Destinos</a></li>
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

    <script src="{{ asset('js/formulario_registro.js') }}"></script>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
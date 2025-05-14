<!--<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Registrarse</title>
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,600" rel="stylesheet">
	
	<link type="text/css" rel="stylesheet" href="colorlib-booking-7.2/colorlib-booking-7/css/bootstrap.min.css" />
	
    <link rel="stylesheet" href="css/intento.css">
	<link type="text/css" rel="stylesheet" href="css/registro.css" />

</head>
<body>
    <section id="inicio">
        <nav>
            <ul>
                <li class="bloque"><a class="enlacesInicio" href="index.html">Inicio</a></li>
                <li class="bloque dropdown">
                    <a class="enlacesInicio" id="destinos" href="destinos.html">Destinos</a>
                    <ul class="menu">
                        <li><a id="america" href="america.html">América</a></li>
                        <li><a id="europa" href="europa.html">Europa</a></li>
                        <li><a id="africa" href="africa.html">África</a></li>
                        <li><a id="asia" href="asia.html">Asia</a></li>
                        <li><a id="oceania" href="oceania.html">Oceanía</a></li>
                        <li><a id="ciudades" href="ciudades.html">Ciudades</a></li>
                        <li><a id="playas" href="playas_islas.html">Playas e Islas</a></li>
                        <li><a id="naturaleza" href="naturaleza.html">Naturaleza</a></li>
                        <li><a id="aventuras" href="aventuras.html">Aventuras únicas</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </section>
    <section>
        <div>
            <ul>
                <li>
                    <img class="mejora_imagen" src="img/playa.jpg" alt="Europa">
                    <div id="booking" class="section">
                        <div class="section-center">
                            <div class="container">
                                <div class="row">
                                    <div class="booking-form">
                                        <form>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="Enter Address, zip, city or airport">
                                                    <span class="form-label">Destination</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                    <span class="form-label">Guests</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                    <span class="form-label">Children</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control" type="date" required>
                                                    <span class="form-label">Check In</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control" type="date" required>
                                                    <span class="form-label">Check out</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-btn">
                                                    <button class="submit-btn">Check availability</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </li>
            </ul>
    </section>
</body>
<script src="js/index.js"></script>
</html>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="css/intento.css">
    <title>Registrarse</title>
</head>
<body>
    <section id="inicio">
        <nav>
            <ul>
                <li class="bloque"><a class="enlacesInicio" href="index.html">Inicio</a></li>
                <li class="bloque dropdown">
                    <a class="enlacesInicio" id="destinos" href="destinos.html">Destinos</a>
                    <ul class="menu">
                        <li><a id="america" href="america.html">América</a></li>
                        <li><a id="europa" href="europa.html">Europa</a></li>
                        <li><a id="africa" href="africa.html">África</a></li>
                        <li><a id="asia" href="asia.html">Asia</a></li>
                        <li><a id="oceania" href="oceania.html">Oceanía</a></li>
                        <li><a id="ciudades" href="ciudades.html">Ciudades</a></li>
                        <li><a id="playas" href="playas_islas.html">Playas e Islas</a></li>
                        <li><a id="naturaleza" href="naturaleza.html">Naturaleza</a></li>
                        <li><a id="aventuras" href="aventuras.html">Aventuras únicas</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </section>
        <img class="mejora_imagen" src="img/playa.jpg" alt="Eruopa">
            <div class="info_form">
                <h1 class="tituloSesion">Regístrate</h1>
                <form id="formulario" action="#" method="POST">
                    <div class="primero">
                        <label for="nombre">Nombre <span class="obligatorio">*</span></label>
                        <input type="text" name="nombre" id="nombre" required>
                    </div>
        
                    <div class="segundo">
                        <label for="apellido">Apellido <span class="obligatorio">*</span></label>
                        <input type="text" name="apellido" id="apellido" required>
                    </div>
        
                    <div class="tercero">
                        <label for="correo">Correo <span class="obligatorio">*</span></label>
                        <input type="email" name="correo" id="correo" required>
                    </div>
        
                    <div class="cuarto">
                        <label for="contrasenya">Contraseña <span class="obligatorio">*</span></label>
                        <input type="password" name="contrasenya" id="contrasenya" required>
                    </div>
        
                    <div class="quinto">
                        <label for="confirmar_contrasenya">Confirmar Contraseña <span class="obligatorio">*</span></label>
                        <input type="password" name="confirmar_contrasenya" id="confirmar_contrasenya" required>
                    </div>
        
                    <div>
                        <button type="submit" class="ingreso">Registrarse</button>
                    </div><br>
                    
                    <p class="marcado">Los campos marcados con asterisco son obligatorios.</p>
                </form>
            </div>
    <footer class="footer">
        <div class="final">
            <div class="secciones_footer">
                <div class="izquierda">
                    <h4>Descubre</h4>
                    <ul>
                        <li><a href="index.html">Inicio</a></li>
                        <li><a id="destinos_footer" href="destinos.html">Destinos</a></li>
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

    <script src="js/index.js"></script>
</body>
</html>-->

<!doctype html>
<html lang="es">
  <head>
  	<title>Registrarse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('css_bootstrap/style.css') }}">

	<link rel="stylesheet" href="{{ asset('css/intento.css') }}">

	</head>
	<body class="img js-fullheight" style="background-image: url(../../img/india.jpg);">

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
                <li class="bloque"><a class="enlacesInicio" id="inicioSesion" href="{{ route('login') }}">Iniciar sesión</a></li>
            </ul>
        </nav>
    </section>

    <!-- Contenido del login -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Regístrate</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Ingresa tus datos</h3>
                        <form action="{{ route('registrar') }}" method="POST" id="formulario" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input id="name-field" type="text" name="name" class="form-control" placeholder="Nombre" required>
                                <p id="restriccion-nombre"></p>
                            </div>
                            <!--<div class="form-group">
                                <input id="lastname-field" type="text" name="apellido" class="form-control" placeholder="Apellido" required>
                                <p id="restriccion-apellido"></p>
                            </div>-->
                            <div class="form-group">
                                <input id="email-field" type="text" name="email" class="form-control" placeholder="Correo" required>
                                <p id="restriccion-correo"></p>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control" placeholder="Contraseña" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <p class="tipo">Mínimo 8 caracteres con mayúscula, minúscula, número y símbolo.</p>
                            <p id="restriccion-contra"></p>
                            <div class="form-group">
                                <input id="password-field-confirm" type="password" name="contrasenya_confirmation" class="form-control" placeholder="Confirmar contraseña" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <p id="verificacion-contra"></p>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Registrar</button>
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
                                    <a class="hover_enlace" href="{{ route('login') }}" style="color: #fff">Inicia sesión aquí.</a>
                                </div>
                                <h4 id="creacion"></h4>
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

    <script src="{{ asset('js/formulario_registro.js') }}"></script>

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
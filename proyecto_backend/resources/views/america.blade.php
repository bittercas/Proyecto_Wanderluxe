<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/intento.css') }}">
    <link rel="stylesheet" href="{{ asset('css/europa.css') }}">
    <link rel="stylesheet" href="{{ asset('css/america.css') }}">
    <title>América</title>
</head>
<body>
    <section id="inicio">
        <nav>
            <ul>
                <li class="bloque"><a class="enlacesInicio" href="{{ route('inicio') }}">Inicio</a></li>
                <li class="bloque dropdown">
                    <a class="enlacesInicio" id="destinos" href="destinos.html">Destinos</a>
                    <ul class="menu">
                        <li><a id="america" href="{{ route('america') }}">América</a></li>
                        <li><a id="africa" href="africa.html">África</a></li>
                        <li><a id="asia" href="asia.html">Asia</a></li>
                        <li><a id="oceania" href="oceania.html">Oceanía</a></li>
                        <li><a id="ciudades" href="ciudades.html">Ciudades</a></li>
                        <li><a id="playas" href="playas_islas.html">Playas e Islas</a></li>
                        <li><a id="naturaleza" href="naturaleza.html">Naturaleza</a></li>
                        <li><a id="aventuras" href="aventuras.html">Aventuras únicas</a></li>
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
                    <img class="mejora_imagen" src="img/quito.jpg" alt="Eruopa">
                    <div class="info_primera_pagina">
                        <h1 class="texto_america">América</h1>
                    </div>
                </li>
            </ul>
    </section>
    <section class="intro">
        <h1 class="header_intro">Descubre América: Un Continente de Diversidad, Naturaleza y Cultura Fascinante</h1><br>
        <div class="caja1">
            <p class="para_intro">América es un continente vibrante que ofrece una combinación única de historia, paisajes
                 impresionantes y culturas fascinantes. Desde las metrópolis llenas de vida hasta las maravillas naturales
                  más imponentes, cada rincón tiene algo especial por descubrir. 
                  Recorre las antiguas ruinas de Machu Picchu, maravíllate con la grandeza del Gran Cañón, sumérgete en la
                   energía de Nueva York o relájate en las paradisíacas playas del Caribe. Con su increíble gastronomía, su
                    gente cálida y sus escenarios inolvidables, América es el destino perfecto para los amantes de la aventura,
                     la historia y la exploración.
            </p>
        </div>
    </section>
    <div class="europa1">
        <h2><span class="colorido">1. </span>Cuenca, Ecuador.</h2>
        <img class="fotoCuenca" src="img/cuenca.jpg" alt="Atenas">
    </div>
    <div class="europaTexto">
        <p>Cuenca, la joya colonial de Ecuador, es una ciudad llena de historia, cultura y belleza arquitectónica. Sus calles empedradas,
             iglesias imponentes y su ambiente tranquilo la convierten en un destino ideal para quienes buscan autenticidad y encanto.
              Rodeada por los Andes y atravesada por cuatro ríos, Cuenca ofrece un equilibrio perfecto entre naturaleza y urbanismo.
               Además, es reconocida por su vibrante escena artística, sus mercados coloridos y su exquisita gastronomía ecuatoriana.
        </p><br>
        <h3>Lugares imperdibles:</h3>
        <p class="lugares"><span class="colorido">Catedral Nueva y Catedral Vieja </span>Dos de los templos más icónicos de la ciudad, con una arquitectura impresionante y vistas panorámicas.</p>
        <p class="lugares"><span class="colorido">Parque Nacional Cajas </span>Un paraíso natural con lagunas, montañas y senderos perfectos para el ecoturismo.</p>
        <p class="lugares"><span class="colorido">Barranco del Tomebamba: </span>Un paseo escénico a lo largo del río, ideal para disfrutar de la belleza colonial de la ciudad.</p>
        <p class="lugares"><span class="colorido">Museo y Parque Arqueológico de Pumapungo: </span>Un sitio arqueológico y cultural que muestra la historia de los incas en la región.</p>
        <p class="lugares"><span class="colorido">Mercado 10 de Agosto: </span>Un lugar perfecto para probar platos típicos como el hornado y la fanesca.</p>
    </div>
    <div class="europa1">
        <h2><span class="colorido">2. </span>Valdivia, Chile.</h2>
        <img class="fotoValdivia" src="img/valdivia.jpg" alt="Riga">
    </div>
    <div class="europaTexto">
        <p>Valdivia, conocida como la "Perla del Sur", es una de las ciudades más hermosas de Chile, famosa por su mezcla de cultura alemana
             y chilena, sus ríos caudalosos y su historia ligada a la colonización y la navegación. Rodeada de naturaleza exuberante, esta
              ciudad es ideal para los amantes de la cerveza artesanal, los mariscos frescos y la tranquilidad de la vida junto al agua.
        </p><br>
        <h3>Lugares imperdibles:</h3>
        <p class="lugares"><span class="colorido">Río Calle-Calle y costanera: </span>Un paseo relajante con vistas espectaculares, ideal para recorrer en bote.</p>
        <p class="lugares"><span class="colorido">Mercado Fluvial: </span>Un lugar perfecto para degustar mariscos frescos y ver a los lobos marinos que se acercan en busca de comida.</p>
        <p class="lugares"><span class="colorido">Isla Teja y Jardín Botánico: </span>Un espacio natural lleno de biodiversidad y tranquilidad dentro de la ciudad.</p>
        <p class="lugares"><span class="colorido">Fuerte de Niebla </span>Un sitio histórico con vistas impresionantes del océano Pacífico y de la bahía de Corral.</p>
        <p class="lugares"><span class="colorido">Cervecerías artesanales </span>Valdivia es famosa por su cerveza, con marcas como Kunstmann y otras pequeñas cervecerías locales.</p>
    </div>
    <div class="europa1">
        <h2><span class="colorido">3. </span>Antigua Guatemala, Guatemala.</h2>
        <img class="fotoAntigua" src="img/antigua.jpg" alt="Riga">
    </div>
    <div class="europaTexto">
        <p>Antigua Guatemala es una ciudad colonial fascinante, declarada Patrimonio de la Humanidad por la UNESCO. Con sus calles empedradas,
             ruinas de iglesias antiguas y un paisaje dominado por volcanes, este destino cautiva a todos los viajeros. Antigua es un lugar
              donde el pasado y el presente se fusionan, ofreciendo una experiencia única llena de historia, cultura y belleza natural.
        </p><br>
        <h3>Lugares imperdibles:</h3>
        <p class="lugares"><span class="colorido">Arco de Santa Catalina </span>El símbolo más emblemático de la ciudad, perfecto para una postal inolvidable.</p>
        <p class="lugares"><span class="colorido">Cerro de la Cruz: </span>Un mirador espectacular con vistas panorámicas de Antigua y los volcanes que la rodean.</p>
        <p class="lugares"><span class="colorido">Iglesia y Convento de La Merced: </span>Un ejemplo de la arquitectura barroca guatemalteca con una impresionante fuente en su patio.</p>
        <p class="lugares"><span class="colorido">Ruinas de la Catedral de Santiago: </span>Un lugar lleno de historia que muestra la grandeza y la fragilidad de la ciudad ante los terremotos.</p>
        <p class="lugares"><span class="colorido">Café y fincas de café: </span>Antigua es famosa por su café de alta calidad, y visitar una finca es una experiencia imperdible.</p>
    </div>
    <div class="europa1">
        <h2><span class="colorido">4. </span>Traverse City, Estados Unidos.</h2>
        <img class="fotoTraverse" src="img/traverse.jpg" alt="Riga">
    </div>
    <div class="europaTexto">
        <p>Traverse City, ubicada en la costa norte del estado de Michigan, es una pintoresca ciudad rodeada de impresionantes paisajes naturales y aguas cristalinas. Conocida por
             su clima templado, sus viñedos y sus playas de arena blanca a lo largo de los lagos Michigan y Traverse, la ciudad es un destino ideal para los amantes de la naturaleza
              y la gastronomía. A menudo considerada la capital de las cerezas de Estados Unidos, Traverse City atrae a los visitantes con su ambiente relajado, su vibrante escena
               artística y sus actividades al aire libre durante todo el año.
        </p><br>
        <h3>Lugares imperdibles:</h3>
        <p class="lugares"><span class="colorido">Lago Michigan y la Playa de Traverse City: </span>Disfruta de las hermosas playas de agua dulce, perfectas para nadar, hacer picnic o pasear por la costa.</p>
        <p class="lugares"><span class="colorido">Peninsula de Old Mission:  </span>Una encantadora península con viñedos, bodegas, y vistas espectaculares del lago, ideal para hacer un recorrido enológico.</p>
        <p class="lugares"><span class="colorido">Museo de la Historia de Traverse City: </span>Conoce más sobre la rica historia de la ciudad, desde sus raíces en la industria de las cerezas hasta su crecimiento como destino turístico.</p>
        <p class="lugares"><span class="colorido">Grand Traverse Bay: </span>Un lugar ideal para practicar deportes acuáticos, como kayak, paddleboard y navegación.</p>
        <p class="lugares"><span class="colorido">Festival Nacional de la Cereza: </span>Si visitas en julio, no te puedes perder este evento anual que celebra la cosecha de cerezas, con actividades, desfiles y competiciones.</p>
    </div>
    <div class="europa1">
        <h2><span class="colorido">5. </span>Colonia de Sacramento, Uruguay.</h2>
        <img class="fotoColonia" src="img/colonia.jpg" alt="Riga">
    </div>
    <div class="europaTexto">
        <p>Colonia del Sacramento es una de las ciudades más encantadoras de Uruguay, famosa por su bien conservado barrio histórico, sus calles empedradas y su
             mezcla de influencias españolas y portuguesas. Ubicada a orillas del Río de la Plata, es un destino perfecto para una escapada tranquila, llena de
              historia y belleza.
        </p><br>
        <h3>Lugares imperdibles:</h3>
        <p class="lugares"><span class="colorido">Barrio Histórico: </span>Declarado Patrimonio de la Humanidad, sus calles adoquinadas y casas coloniales crean un ambiente mágico.</p>
        <p class="lugares"><span class="colorido">Faro de Colonia: </span>Un lugar perfecto para obtener vistas panorámicas de la ciudad y el río.</p>
        <p class="lugares"><span class="colorido">Plaza Mayor: </span>El corazón de la ciudad antigua, rodeado de edificios históricos y restaurantes acogedores.</p>
        <p class="lugares"><span class="colorido">Puerta de la Ciudadela: </span>Un vestigio de las antiguas fortificaciones que protegían la ciudad.</p>
        <p class="lugares"><span class="colorido">Rambla costera: </span>Un paseo relajante junto al río, ideal para disfrutar del atardecer con una copa de vino uruguayo.</p>
    </div>
    <section class="intro">
        <h1 class="header_intro">Descubre Europa: Un Continente de Historia, Cultura y Paisajes Inolvidables.</h1><br>
        <div class="caja1">
            <p class="para_intro">Europa es un destino que combina la riqueza histórica con la modernidad, ofreciendo a los viajeros
                 una experiencia única en cada rincón. Desde las majestuosas ciudades llenas de arte y arquitectura hasta los paisajes
                  naturales que quitan el aliento, este continente es el lugar perfecto para explorar y maravillarse.
                Camina por las románticas calles de París, descubre la grandeza de Roma, sumérgete en la vibrante cultura de Barcelona
                 o aventúrate en los impresionantes fiordos de Noruega. Ya sea que busques historia, gastronomía, aventura o relajación,
                  Europa tiene algo especial para cada viajero.
            </p>
        </div>
    </section>
    <footer class="footer">
        <div class="final">
            <div class="secciones_footer">
                <div class="izquierda">
                    <h4>Descubre</h4>
                    <ul>
                        <li><a href="{{ route('inicio') }}">Inicio</a></li>
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
                <div class="derecha">
                    <p></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/index.js"></script>
</body>
</html>
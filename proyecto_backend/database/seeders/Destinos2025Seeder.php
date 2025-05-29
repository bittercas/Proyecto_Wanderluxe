<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Destinos2025Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('top2025')->insert([
            [
            'titulo' => 'Hanói, Vietnam',
            'descripcion' => 'Hanói, la vibrante capital de Vietnam, es una mezcla fascinante de historia milenaria, arquitectura colonial francesa y un ritmo urbano moderno que enamora a cada visitante. Caminar por sus calles es sumergirse en una ciudad donde el pasado y el presente coexisten con armonía: templos ancestrales, lagos serenos y mercados bulliciosos conviven con cafés artísticos y scooters zigzagueando por doquier. Entre sus principales encantos se encuentran el histórico Casco Antiguo, con sus callejones llenos de vida y sabores únicos; el majestuoso Mausoleo de Ho Chi Minh, símbolo de la identidad nacional; y el romántico Lago Hoan Kiem, perfecto para paseos al atardecer. Hanói no solo es historia, también es sabor. La ciudad es el corazón de la cocina vietnamita: desde el tradicional pho hasta el famoso café con huevo, cada bocado es una experiencia. Con su gente amable, su atmósfera única y su mezcla de tradición y modernidad, Hanói te espera para mostrarte una versión auténtica de Vietnam que nunca olvidarás.',
            'imagen' => 'hanoi.jpg',
            ],
            [
            'titulo' => 'Taskent, Uzbekistán',
            'descripcion' => 'Taskent, la capital de Uzbekistán, es un punto de encuentro entre la historia de la antigua Ruta de la Seda y la vida moderna de Asia Central. Esta ciudad sorprende a cada paso: amplias avenidas bordeadas de árboles, estaciones de metro con arte soviético, y mercados tradicionales donde los aromas de especias, frutas secas y pan recién horneado envuelven el ambiente. Taskent es una mezcla armónica entre tradición y modernidad: minaretes antiguos y mezquitas centenarias conviven con rascacielos de vidrio, centros comerciales y cafés de diseño. Entre sus joyas más destacadas están el bazar Chorsu, un estallido de colores y sabores bajo una gran cúpula azul; el complejo Khast Imam, donde se guarda uno de los coranes más antiguos del mundo; y el Museo de Artes Aplicadas, con una impresionante colección de artesanía uzbeka. Por la noche, la ciudad se transforma en un escenario animado, con fuentes iluminadas, conciertos al aire libre y una escena culinaria que combina lo mejor de Asia Central con influencias rusas y persas. Taskent no es solo un destino, es una experiencia cultural viva, que te invita a descubrir una historia profunda, una hospitalidad cálida y una identidad que se reinventa sin perder sus raíces. Un viaje a Taskent es abrir una ventana a un mundo fascinante que aún pocos conocen, pero que deja una huella imborrable.',
            'imagen' => 'taskent.jpg',
            ],
            [
            'titulo' => 'Groenlandia',
            'descripcion' => 'Groenlandia, la isla más grande del mundo, es un destino único, donde el hielo y la naturaleza salvaje dominan el paisaje. Aquí, los glaciares se derraman en vastos fiordos, y los enormes icebergs flotan serenamente en las aguas cristalinas, ofreciendo uno de los paisajes más impresionantes del planeta. La cultura inuit, que lleva siglos habiendo hecho de esta isla su hogar, está presente en cada rincón, con pequeñas aldeas que te invitan a conocer sus tradiciones ancestrales. Groenlandia, además de su impresionante belleza natural, ofrece una calma única: en verano, el sol nunca se pone, y en invierno, las auroras boreales pintan el cielo de colores vibrantes. Cada paso en Groenlandia es un viaje hacia un mundo donde la naturaleza se muestra en su forma más pura y misteriosa. Ideal para los viajeros que buscan una desconexión total, este lugar permite explorar un planeta que parece intocado por la modernidad.',
            'imagen' => 'greenland.jpg',
            ],
            [
            'titulo' => 'Ámsterdam, Países Bajos',
            'descripcion' => 'Ámsterdam, con su aire bohemio y su vibrante vida cultural, es una ciudad que nunca deja de cautivar. Sus famosos canales, que recorren el corazón de la ciudad, están rodeados de elegantes casas históricas que parecen flotar sobre el agua. La ciudad, siempre viva, te invita a recorrerla en bicicleta, un medio de transporte tan común como los tranvías en muchas ciudades. Además de su inconfundible arquitectura, Ámsterdam es hogar de museos de clase mundial, como el Museo Van Gogh y el Rijksmuseum, que albergan algunas de las obras de arte más icónicas del mundo. El Barrio Rojo, los mercados de flores y la tranquilidad de los parques como Vondelpark, dan una mezcla perfecta de historia, modernidad y naturaleza. Ámsterdam también es famosa por su ambiente relajado, por lo que podrás disfrutar de una bebida en una terraza junto al canal o probar su cocina innovadora. Cada rincón de Ámsterdam tiene algo por descubrir, desde sus cafés hasta sus calles llenas de cultura y creatividad.',
            'imagen' => 'amsterddam.jpg',
            ],
            [
            'titulo' => 'Sri Lanka',
            'descripcion' => 'Sri Lanka, conocida como la "Perla del Índico", es un paraíso tropical que combina naturaleza virgen, playas doradas, templos antiguos y una rica historia cultural. Este pequeño pero fascinante país ofrece una diversidad impresionante: desde las playas de arena blanca de Mirissa, perfectas para el surf y el buceo, hasta los campos de té que cubren las colinas de Kandy, una región de montañas cubiertas de verde intenso. La ciudad de Sigiriya, famosa por su roca antigua y las frescas aguas termales, y la ciudad de Galle, con su arquitectura colonial portuguesa, son solo algunas de las maravillas que ofrece Sri Lanka. En el centro de la isla, los templos budistas y los monumentos históricos cuentan historias de una civilización rica y fascinante. Además, Sri Lanka es un lugar donde la biodiversidad florece, lo que convierte al país en un destino ideal para los amantes de la naturaleza. Desde los safaris en el Parque Nacional de Yala, donde se pueden ver elefantes y leopardos, hasta sus mercados llenos de frutas exóticas y especias, Sri Lanka ofrece una experiencia inolvidable de aventura, espiritualidad y belleza natural.',
            'imagen' => 'srilanka.jpg',
            ],
            [
            'titulo' => 'Bolivia',
            'descripcion' => 'Bolivia es un país de contrastes extremos: desde los imponentes picos de los Andes hasta las vastas llanuras del Amazonas. En el corazón de esta nación se encuentra el Salar de Uyuni, el desierto de sal más grande del mundo, que crea un paisaje surrealista, especialmente cuando está cubierto por una capa de agua que lo convierte en un gigantesco espejo. La Paz, la ciudad más alta del mundo, ubicada a más de 3,600 metros sobre el nivel del mar, ofrece una mezcla fascinante de cultura indígena y colonización española. Potosí, con su historia minera, y Sucre, la ciudad constitucional, son testigos de una rica herencia colonial. Bolivia también es conocida por su diversidad cultural, sus mercados tradicionales y su gente cálida y acogedora. En las tierras bajas, el Parque Nacional Madidi ofrece un paraíso para los ecoturistas, con una de las mayores biodiversidades del planeta. Este país, donde el tiempo parece detenerse, es ideal para los viajeros aventureros que buscan sumergirse en la historia, la cultura y los paisajes más extremos.',
            'imagen' => 'uyuni.jpg',
            ],
            [
            'titulo' => 'Huangshan, China',
            'descripcion' => 'Las montañas Huangshan, o "Montañas Amarillas", son uno de los paisajes más emblemáticos de China, conocidas por su belleza mística y su influencia en el arte y la literatura china. Estas montañas son famosas por sus formaciones rocosas únicas, pinos solitarios que parecen desafiar la gravedad y las nubes que se arremolinan entre sus picos, creando una atmósfera de ensueño. En el pasado, Huangshan fue fuente de inspiración para poetas y pintores, que encontraron en sus vistas una representación de lo sublime. Además de su increíble belleza natural, Huangshan es un lugar que invita a la introspección: caminar por sus senderos rodeados de niebla, respirando aire fresco y puro, es una experiencia profundamente reconectante con la naturaleza. La región también cuenta con una rica historia cultural y es conocida por su arquitectura tradicional y sus templos budistas. Un destino ideal para los amantes de las caminatas y aquellos que buscan disfrutar de paisajes impresionantes, Huangshan es un lugar donde la magia de China se revela ante tus ojos.',
            'imagen' => 'huangshan.jpg',
            ],
            [
            'titulo' => 'Paris, Francia',
            'descripcion' => 'París, la capital del romance y la cultura, es un destino que no solo se disfruta con los ojos, sino también con el corazón. Sus calles empedradas, sus cafés de fachada acogedora y sus boutiques elegantes crean una atmósfera única. La Torre Eiffel, la más famosa de sus maravillas, se alza majestuosamente sobre el Sena, ofreciendo unas vistas inigualables de la ciudad. Sin embargo, París no es solo una ciudad de monumentos icónicos, sino también un centro cultural vibrante, donde el arte, la moda y la gastronomía convergen. El Louvre, el Museo de Orsay y el Centro Pompidou son solo algunos de los templos del arte mundial que puedes explorar. En cada rincón, París invita a perderse: en el bohemio barrio de Montmartre, en los jardines del Palacio de Luxemburgo o simplemente paseando por las orillas del río Sena al atardecer. La ciudad también es famosa por su cocina, con una oferta que va desde croissants y baguettes recién horneadas hasta exquisitas cenas gourmet. París es, sin duda, un destino para los sentidos, donde cada experiencia se convierte en un recuerdo inolvidable.',
            'imagen' => 'paris.jpg',
            ],
            [
            'titulo' => 'Nueva York, Estados Unidos',
            'descripcion' => 'Nueva York, el corazón palpitante de Estados Unidos, es un destino que no deja indiferente a nadie. Desde la famosa Times Square con sus gigantescos carteles luminosos, hasta los tranquilos senderos de Central Park, la ciudad ofrece una vibrante mezcla de energía, cultura y modernidad. Los rascacielos de Manhattan, como el Empire State Building y el One World Trade Center, te dan una perspectiva única de la ciudad, mientras que el Puente de Brooklyn conecta las dos orillas del río East. Además, Nueva York es el lugar de los Broadway Shows, las tiendas de lujo en la Quinta Avenida y los museos más importantes del mundo, como el Metropolitan Museum of Art y el Museo de Historia Natural. Pero Nueva York también tiene una faceta más tranquila y acogedora: el barrio de Greenwich Village, sus pequeños cafés en SoHo y la fascinante vida nocturna en Manhattan o Brooklyn. La ciudad nunca duerme, siempre tiene algo nuevo por descubrir, y cada visitante encontrará algo que lo haga sentir como en casa, ya sea una obra de arte, un plato de comida o una historia contada por sus habitantes.',
            'imagen' => 'newyork.jpg',
            ],
            [
            'titulo' => 'Marruecos',
            'descripcion' => 'Marruecos, con su encanto oriental, es un destino lleno de misterio y belleza. Desde la ciudad imperial de Marrakech, famosa por sus bulliciosos zocos, sus jardines exuberantes y la impresionante Plaza Jemaa el-Fna, hasta las dunas doradas del Sahara, donde el silencio y la vastedad del desierto te dejan sin aliento, Marruecos ofrece una mezcla fascinante de historia, cultura y naturaleza. La arquitectura morisca, con sus mosaicos intrincados y sus riads llenos de flores, se encuentra en ciudades como Fez y Rabat, mientras que las montañas del Atlas ofrecen vistas espectaculares y rutas de trekking que te llevan a aldeas perdidas entre las montañas. El país también es conocido por su excelente gastronomía, con platos como el tajín, los cuscús y los dulces tradicionales. Marruecos es un lugar donde la hospitalidad y la calidez de su gente hacen que cada viaje sea una experiencia inolvidable, un lugar donde las huellas del pasado árabe se sienten en cada rincón, y la magia de los mercados y palacios te transporta a otra época.',
            'imagen' => 'marruecos.jpg',
            ],
        ]);
    }
}

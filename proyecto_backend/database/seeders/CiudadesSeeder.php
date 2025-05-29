<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ciudades')->insert([
            [
            'titulo' => 'Cartagena de Indias, Colombia',
            'descripcion' => 'Cartagena de Indias es una de las ciudades más cautivadoras del Caribe colombiano, donde la historia colonial se fusiona con la calidez tropical y una vibrante vida cultural. Fundada en 1533, su Ciudad Amurallada, declarada Patrimonio de la Humanidad por la UNESCO, es un laberinto de calles empedradas, balcones adornados con flores y plazas llenas de vida. La muralla que rodea la ciudad, construida para protegerla de los ataques piratas, es una de las más imponentes de América Latina. Entre sus monumentos más emblemáticos se encuentran el Palacio de la Inquisición, que alberga un museo sobre la historia colonial y la Inquisición en América, y la Torre del Reloj, la entrada principal a la ciudad amurallada. Además, la ciudad es famosa por sus festivales, como el Festival Internacional de Música y el Concurso Nacional de Belleza, que se celebran anualmente. Las playas de Cartagena, como Bocagrande y Playa Blanca, ofrecen un respiro del bullicio urbano, mientras que la cercanía a las Islas del Rosario permite disfrutar de aguas cristalinas y arrecifes coralinos. La gastronomía local, influenciada por las tradiciones africanas, indígenas y españolas, es otro de sus grandes atractivos, con platos como el arroz con coco, las arepas de huevo y el ceviche de camarones.',
            'imagen' => 'cartagena.jpg',
            ]
            [
            'titulo' => 'Barcelona, España',
            'descripcion' => 'Barcelona es una ciudad que enamora a primera vista, con su arquitectura modernista, playas urbanas y una oferta cultural inigualable. Diseñada por el genio Antoni Gaudí, la Sagrada Familia es su obra más emblemática, una iglesia monumental que ha estado en construcción durante más de un siglo. Otros ejemplos de su genialidad son el Parque Güell, la Casa Batlló y la Casa Milà, todos ellos Patrimonio de la Humanidad. La ciudad también es famosa por su vida nocturna, sus mercados como La Boquería y su gastronomía, que va desde las tradicionales tapas hasta la cocina de vanguardia. El barrio Gótico, con sus callejones medievales, y el moderno distrito de El Born ofrecen una mezcla perfecta de historia y modernidad. Además, Barcelona es un destino ideal para los amantes del deporte, con el estadio Camp Nou, hogar del FC Barcelona, y una gran variedad de actividades al aire libre, como paseos en bicicleta por la ciudad o deportes acuáticos en sus playas.',
            'imagen' => 'barcelona.jpg',
            ],
            [
            'titulo' => 'Riga, Letonia',
            'descripcion' => 'Riga, la capital de Letonia, es una ciudad que combina el encanto de su casco antiguo medieval con una arquitectura Art Nouveau impresionante y una vida cultural vibrante. Su centro histórico, declarado Patrimonio de la Humanidad por la UNESCO, está lleno de iglesias góticas, plazas animadas y edificios de colores pastel que reflejan su rica historia. Uno de los lugares más emblemáticos es el Mercado Central de Riga, uno de los más grandes de Europa, que ocupa los antiguos hangares de dirigibles y ofrece una variedad de productos locales frescos. Además, la ciudad es conocida por su escena artística, con numerosos museos, galerías y festivales que celebran la creatividad y la innovación. Riga también es famosa por su vida nocturna, con una amplia oferta de bares, clubes y restaurantes que ofrecen desde cocina tradicional letona hasta platos internacionales. La ciudad es un destino perfecto para quienes buscan una experiencia cultural auténtica en un entorno europeo único.',
            'imagen' => 'riga2.jpg',
            ],
            [
            'titulo' => 'San Miguel de Allende, México',
            'descripcion' => 'San Miguel de Allende es una ciudad colonial ubicada en el corazón de México, conocida por su arquitectura barroca, calles empedradas y una vibrante comunidad artística. Su centro histórico, con la Parroquia de San Miguel Arcángel como pieza central, es un lugar donde el tiempo parece haberse detenido, ofreciendo una atmósfera tranquila y acogedora. La ciudad es un refugio para artistas y creativos de todo el mundo, con numerosas galerías, talleres y festivales que celebran el arte y la cultura. Además, San Miguel de Allende es famosa por su gastronomía, que combina sabores tradicionales mexicanos con influencias internacionales, y por su hospitalidad, que hace sentir a los visitantes como en casa. San Miguel de Allende también es un excelente punto de partida para explorar la región, con excursiones a viñedos cercanos, baños termales y pueblos mágicos que conservan las tradiciones y costumbres del México profundo..',
            'imagen' => 'san_miguel.jpg',
            ],
            [
            'titulo' => 'El Cairo, Egipto',
            'descripcion' => 'El Cairo es una ciudad que late al ritmo de la historia, donde las huellas de las civilizaciones antiguas se mezclan con la energía de una metrópolis moderna. Es hogar de las pirámides de Giza, una de las siete maravillas del mundo antiguo, y del Museo Egipcio, que alberga una de las colecciones más completas de artefactos faraónicos. La ciudad también es conocida por su vida vibrante, con mercados como el Khan el-Khalili, donde se pueden encontrar desde especias hasta artesanías tradicionales, y una rica escena gastronómica que ofrece platos como el koshari, el falafel y el baklava. El Nilo, que atraviesa la ciudad, ofrece la oportunidad de realizar paseos en barco al atardecer, disfrutando de vistas panorámicas de la ciudad y sus monumentos iluminados. El Cairo es un destino que combina historia, cultura y modernidad de una manera única.',
            'imagen' => 'cairo2.jpg',
            ],
            [
            'titulo' => 'Berlín, Alemania',
            'descripcion' => 'Berlín es una ciudad que ha sabido reinventarse a lo largo de los siglos, convirtiéndose en un epicentro cultural, artístico y político de Europa. Su historia reciente, marcada por la caída del Muro de Berlín, se refleja en monumentos como la Puerta de Brandeburgo y el Memorial del Holocausto. La ciudad es conocida por su vibrante escena artística, con numerosos museos, galerías y espacios alternativos que celebran la creatividad y la libertad de expresión. Barrios como Kreuzberg y Friedrichshain ofrecen una mezcla de culturas, con una amplia oferta de restaurantes, bares y tiendas que reflejan la diversidad de la ciudad. Berlín también es famosa por su vida nocturna, con clubes de renombre mundial que atraen a amantes de la música electrónica de todo el mundo. Además, la ciudad cuenta con amplios espacios verdes, como el Tiergarten, ideales para paseos y actividades al aire libre.',
            'imagen' => 'berlin.jpg',
            ],
            [
            'titulo' => 'Kutaisi, Georgia',
            'descripcion' => 'Kutaisi es una ciudad histórica situada en el oeste de Georgia, considerada una de las más antiguas de Europa. Antiguamente capital del legendario reino de Cólquide, relacionado con la historia de Jasón y el Vellocino de Oro, Kutaisi es un destino cargado de historia, mitología y espiritualidad. La ciudad se extiende a orillas del río Rioni y combina su pasado glorioso con un ambiente tranquilo y acogedor. Entre sus mayores joyas están la Catedral de Bagrati y el Monasterio de Gelati, ambos declarados Patrimonio de la Humanidad por la UNESCO. Además, Kutaisi sirve como base ideal para explorar algunos de los paisajes naturales más espectaculares de Georgia, como la Cueva de Prometeo, con sus formaciones de estalactitas iluminadas, o el Cañón de Okatse, con su pasarela colgante sobre el abismo. Su gente es hospitalaria, su comida casera y deliciosa —con platos como el khachapuri o el khinkali—, y su vida urbana conserva una autenticidad que se ha perdido en muchos destinos europeos. Kutaisi es ideal para quienes buscan escapar de las rutas turísticas tradicionales y descubrir una ciudad que, aunque pequeña, rebosa cultura, historia y belleza natural.',
            'imagen' => 'kutaisi.jpg',
            ],
            [
            'titulo' => 'Siem Reap, Camboya',
            'descripcion' => 'Siem Reap es mucho más que la entrada a Angkor Wat: es un centro cultural y espiritual que mezcla el legado majestuoso del Imperio Jemer con una ciudad vibrante, artística y profundamente hospitalaria. Situada en el norte de Camboya, esta ciudad ha crecido en torno a uno de los complejos arqueológicos más impresionantes del mundo, Patrimonio de la Humanidad, donde los templos antiguos emergen entre la selva y el amanecer sobre Angkor Wat deja sin palabras a quienes lo presencian. Pero más allá de los templos, Siem Reap ofrece una experiencia enriquecedora y humana: mercados nocturnos repletos de sabores exóticos, espectáculos de danza tradicional apsara, talleres de artesanía local y un sinfín de opciones para explorar la cultura camboyana. La ciudad también es conocida por su espíritu resiliente y optimista, visible en sus ONG, iniciativas comunitarias y turismo responsable. Los alrededores de Siem Reap permiten explorar aldeas flotantes, arrozales infinitos y reservas naturales, brindando una visión más completa de la vida en el país. Es un destino que invita a la reflexión, la contemplación y el descubrimiento, perfecto para viajeros curiosos y conscientes.',
            'imagen' => 'siem_reap.jpg',
            ],
            [
            'titulo' => 'Ciudad del Cabo, Sudáfrica',
            'descripcion' => 'Ciudad del Cabo es una de las ciudades más impresionantes del hemisferio sur, donde la naturaleza salvaje se fusiona con una vida urbana cosmopolita y diversa. Dominada por la icónica Montaña de la Mesa, la ciudad ofrece vistas panorámicas, playas de arena blanca, viñedos centenarios y barrios llenos de historia y cultura. Es una de las joyas del sur de África, donde cada rincón cuenta una historia y cada experiencia deja una huella. El centro histórico, con su arquitectura colonial holandesa y su animado mercado de Greenmarket Square, convive con el colorido barrio de Bo-Kaap, hogar de la comunidad musulmana y símbolo de la resistencia cultural. El V&A Waterfront es un moderno puerto repleto de tiendas, restaurantes y museos, desde donde parten ferris a Robben Island, la prisión donde estuvo recluido Nelson Mandela durante décadas. Los alrededores de la ciudad ofrecen aventuras como excursiones a Cape Point, rutas de vino en Stellenbosch y Franschhoek, y safaris accesibles para ver animales salvajes en su hábitat natural. Ciudad del Cabo también es un modelo de convivencia multicultural, con una escena artística emergente, gastronomía de fusión y un espíritu resiliente. Es un destino ideal para los viajeros que buscan belleza natural, profundidad histórica y una energía única que solo África puede ofrecer.',
            'imagen' => 'cape.jpg',
            ],
            [
            'titulo' => 'Singapur, Singapur',
            'descripcion' => 'Singapur es una ciudad-estado moderna y fascinante en el corazón del sudeste asiático, donde la tecnología y el diseño urbano conviven con una herencia cultural profundamente diversa. Con su arquitectura futurista, espacios verdes perfectamente integrados y una organización ejemplar, ofrece una experiencia cosmopolita única. Lugares emblemáticos como Marina Bay Sands, Gardens by the Bay y el Singapore Flyer reflejan su visión de futuro, mientras que barrios como Chinatown, Little India y Kampong Glam muestran sus raíces multiculturales. La gastronomía es otro de sus grandes atractivos: desde los reconocidos hawker centres, donde se sirve cocina tradicional a precios accesibles, hasta restaurantes de clase mundial galardonados con estrellas Michelin. Singapur también destaca por su seguridad, limpieza y transporte eficiente, lo que la convierte en una ciudad muy cómoda para explorar. Sus alrededores ofrecen una gran variedad de actividades, como las playas y atracciones de Sentosa, los jardines botánicos patrimonio de la UNESCO, y eventos internacionales como el Gran Premio de Fórmula 1. Es un destino ideal para quienes buscan una combinación de modernidad, cultura y calidad de vida en el corazón de Asia.',
            'imagen' => 'singapur.jpg',
            ],
        ]);
    }
}

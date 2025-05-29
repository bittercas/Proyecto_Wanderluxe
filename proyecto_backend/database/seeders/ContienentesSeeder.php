<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContienentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('continentes')->insert([
            [
            'titulo' => 'Noruega',
            'descripcion' => 'Noruega, ubicada en el norte de Europa, es un país de paisajes sobrecogedores, naturaleza virgen y una calidad de vida envidiable. Conocida por sus espectaculares fiordos, montañas escarpadas y extensos bosques, es un destino ideal para quienes buscan aventura, tranquilidad y belleza escénica en su estado más puro. Desde las auroras boreales que iluminan el cielo ártico en invierno hasta los interminables días de sol del verano, Noruega ofrece experiencias únicas durante todo el año.',
            'imagen' => 'oslo.jpg',
            ]
            [
            'titulo' => 'Estados Unidos',
            'descripcion' => 'Estados Unidos, una nación vasta y diversa, es uno de los destinos más emblemáticos del mundo. Con paisajes que van desde las playas de California hasta los bosques de Nueva Inglaterra, el país ofrece una variedad incomparable de experiencias culturales, naturales y urbanas. En el corazón del suroeste estadounidense se encuentra Las Vegas, una ciudad famosa por su deslumbrante vida nocturna, sus icónicos casinos y su atmósfera vibrante y enérgica. Conocida como "la capital mundial del entretenimiento", Las Vegas atrae a millones de visitantes cada año con sus espectáculos de clase mundial, hoteles temáticos y luces que nunca se apagan.',
            'imagen' => 'lasvegas.jpg',
            ],
            [
            'titulo' => 'Qatar',
            'descripcion' => 'Qatar es un país con profundas raíces culturales. Su capital, Doha, se ha convertido en uno de los centros urbanos más modernos del mundo, con rascacielos futuristas, hoteles de cinco estrellas y museos de renombre internacional como el Museo de Arte Islámico y el Museo Nacional de Qatar. A pesar de su crecimiento vertiginoso, Qatar conserva la esencia de sus tradiciones beduinas, visible en sus majestuosos zocos, su gastronomía local y sus eventos culturales. Los visitantes pueden disfrutar de experiencias inolvidables como safaris en el desierto, paseos en camello por las dunas, o relajarse frente a las aguas del Golfo. Además, Qatar ha ganado protagonismo mundial gracias a su compromiso con el deporte y la cultura, siendo sede de importantes eventos internacionales. Ideal para quienes buscan una combinación de modernidad, tradición y exclusividad, Qatar es un destino que redefine el turismo en el Medio Oriente.',
            'imagen' => 'doha.jpg',
            ],
            [
            'titulo' => 'Grecia',
            'descripcion' => 'Grecia es mucho más que un destino turístico: es un viaje al pasado, una experiencia sensorial y un refugio de belleza mediterránea. Esta tierra legendaria, cuna de la filosofía, la democracia y los Juegos Olímpicos, encanta a los visitantes con sus ruinas antiguas, templos majestuosos y una historia que se respira en cada rincón. Atenas, su capital, combina lo clásico y lo moderno, mientras que sus islas, como Santorini, Creta o Corfú, ofrecen playas de aguas turquesas, casas encaladas y puestas de sol inolvidables. La gastronomía griega, basada en productos frescos, aceite de oliva y sabores mediterráneos, es otro gran atractivo. Pero Grecia también es calidez humana, música tradicional, danzas populares y una hospitalidad que se mantiene viva desde tiempos antiguos. Ya sea navegando por el mar Egeo, explorando sitios arqueológicos o relajándose en una taberna junto al mar, Grecia es un lugar que conecta con el alma y permanece en la memoria.',
            'imagen' => 'delfo.jpg',
            ],
            [
            'titulo' => 'Corea del Sur',
            'descripcion' => 'Corea del Sur es un país donde la tradición milenaria y la innovación tecnológica conviven de forma asombrosamente armónica. Su capital, Seúl, es una metrópolis dinámica repleta de contrastes: templos budistas entre rascacielos, mercados tradicionales junto a centros comerciales futuristas, y una vida nocturna vibrante que nunca se detiene. Más allá de sus ciudades, el país ofrece paisajes naturales que van desde montañas escarpadas y bosques tranquilos hasta costas espectaculares y pueblos rurales donde aún se respira el pasado. Corea del Sur también ha ganado fama mundial por su cultura pop, como el K-pop y los dramas coreanos, que han influido enormemente en las nuevas generaciones de viajeros. Además, su gastronomía —con platos como el kimchi, el bibimbap o el samgyeopsal— es una experiencia cultural en sí misma. Para quienes buscan una combinación de modernidad, cultura profunda y hospitalidad, Corea del Sur es un destino tan emocionante como enriquecedor.',
            'imagen' => 'corea.jpg',
            ],
            [
            'titulo' => 'Nicaragua',
            'descripcion' => 'Nicaragua, en el corazón de Centroamérica, es un país que sorprende por su autenticidad, su diversidad natural y su patrimonio cultural. Conocida como “la tierra de lagos y volcanes”, Nicaragua ofrece una experiencia única para los amantes de la aventura y la naturaleza. Las ciudades coloniales como Granada y León conservan su arquitectura histórica y su vibrante vida artística, mientras que destinos como Ometepe, con su majestuoso volcán doble, o las playas del Pacífico como San Juan del Sur, atraen tanto a ecoturistas como a surfistas de todo el mundo. La calidez de su gente, la riqueza de su cultura popular y su cocina tradicional hacen que cada visita se sienta genuina y cercana. Nicaragua es también un país que aún conserva muchos paisajes vírgenes, desde reservas biológicas hasta islas tropicales en el Caribe como Corn Island. Para quienes buscan explorar un destino fuera de los circuitos convencionales, lleno de encanto y aventura, Nicaragua es una elección que deja huella.',
            'imagen' => 'nicaragua.jpg',
            ],
            [
            'titulo' => 'Australia',
            'descripcion' => 'Australia es una tierra de extremos y maravillas, donde la naturaleza salvaje se encuentra con una vida urbana vibrante y sofisticada. Con paisajes tan diversos como el desierto del Outback, la Gran Barrera de Coral o las selvas tropicales del norte, el país ofrece experiencias únicas para todo tipo de viajeros. Las ciudades como Sídney, Melbourne y Brisbane destacan por su arquitectura contemporánea, su escena cultural y su estilo de vida relajado y multicultural. En Australia puedes surfear en playas mundialmente famosas, explorar antiguas tradiciones aborígenes o realizar excursiones a parques nacionales donde habitan animales únicos como canguros y koalas. Además, su gastronomía fusiona influencias asiáticas, europeas y oceánicas, y su gente se caracteriza por su calidez y espíritu acogedor. Australia es un destino ideal para los amantes de la aventura, la biodiversidad y la vida al aire libre, donde cada viaje se convierte en una exploración inolvidable.',
            'imagen' => 'australia.jpg',
            ],
            [
            'titulo' => 'España',
            'descripcion' => 'España es un país vibrante, diverso y apasionado, donde cada región ofrece una experiencia única llena de historia, arte, paisajes espectaculares y una cultura profundamente arraigada. Desde los monumentos icónicos de Madrid y Barcelona hasta los pueblos blancos de Andalucía o las costas doradas del Mediterráneo, España combina la grandeza de su pasado con la energía de un presente moderno y cosmopolita. Su legado cultural se refleja en sus catedrales góticas, palacios árabes, museos de fama mundial y festivales tradicionales como la Feria de Abril o los Sanfermines. La gastronomía es una celebración de sabores: tapas, paellas, jamón ibérico y vinos exquisitos forman parte del alma española. Además, la calidez de su gente y su estilo de vida relajado hacen que los visitantes se sientan como en casa. Ya sea para descubrir su arte, sumergirse en su historia o disfrutar de sus playas y su vibrante vida nocturna, España es un destino que emociona y enamora a cada paso.',
            'imagen' => 'espanha.jpg',
            ],
            [
            'titulo' => 'Panamá',
            'descripcion' => 'Panamá es un país donde dos océanos se encuentran y múltiples culturas se entrelazan. Conocido por su famoso canal, que conecta el Atlántico y el Pacífico, Panamá es mucho más que una maravilla de la ingeniería. Su capital, Ciudad de Panamá, mezcla modernidad con historia colonial en su casco antiguo, mientras que el interior del país ofrece paisajes naturales sorprendentes: selvas tropicales, montañas, playas vírgenes y parques nacionales con una biodiversidad extraordinaria. Las islas de San Blas, administradas por la comunidad indígena Guna, son un paraíso caribeño que parece sacado de una postal. Panamá es también hogar de una rica herencia afrocaribeña, indígena y mestiza, que se refleja en su música, danzas y cocina. Este destino, aún poco explorado por el turismo masivo, es ideal para quienes buscan autenticidad, contacto con la naturaleza y experiencias culturales profundas. Panamá es pequeño en tamaño, pero inmenso en experiencias.',
            'imagen' => 'panama.jpg',
            ],
            [
            'titulo' => 'Botsuana',
            'descripcion' => 'Botsuana es uno de los destinos más fascinantes de África para los amantes de la naturaleza y los safaris. Con vastas áreas protegidas, como el Delta del Okavango —uno de los pocos deltas interiores del mundo— y el Parque Nacional Chobe, el país ofrece encuentros cercanos con elefantes, leones, jirafas y una asombrosa diversidad de vida salvaje en su estado más puro. A diferencia de otros destinos africanos, Botsuana apuesta por un turismo sostenible y de bajo impacto, lo que garantiza una experiencia más íntima y respetuosa con el entorno. Sus paisajes cambian dramáticamente entre la exuberancia acuática del delta y las llanuras áridas del desierto del Kalahari. Más allá de su naturaleza imponente, Botsuana también es hogar de culturas tradicionales como los pueblos san, que mantienen vivas sus costumbres ancestrales. Aventurero, sereno y auténtico, Botsuana es un destino ideal para quienes buscan una conexión profunda con la tierra y una visión del África más genuina.',
            'imagen' => 'botswana.jpg',
            ],
        ]);
    }
}

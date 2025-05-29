<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('secciones')->insert([
            [
            'introduccion' => 'Siente la magia de descubrir el mundo.',
            'parrafo' => 'Descubre todos los destinos que te esperan con WanderLuxe, una página donde encontrarás las mejores opciones de viaje para planificar tu próxima aventura.',
            ]
            [
            'introduccion' => 'Titulo 2',
            'parrafo' => 'Descubre los destinos más sorprendentes y emocionantes para explorar este año. Con el mundo lleno de nuevas posibilidades de viaje, hemos seleccionado lugares únicos que ofrecen una combinación perfecta de aventura, cultura y belleza natural. Desde las majestuosas montañas de Nepal y los secretos de la Selva Amazónica en Perú, hasta las playas paradisíacas de las Maldivas y los vibrantes mercados de Hong Kong, 2025 es el año perfecto para explorar rincones del planeta que aún conservan su esencia, pero que se reinventan con nuevas experiencias. Estas recomendaciones no solo son ideales para quienes buscan paisajes impresionantes y actividades al aire libre, sino también para aquellos que desean sumergirse en culturas auténticas, probar gastronomía local y conectarse con la historia y las tradiciones de cada destino. Ya sea que te atraigan las grandes metrópolis modernas, los pueblos pintorescos rodeados de naturaleza o los destinos exóticos, nuestras recomendaciones para 2025 están diseñadas para ofrecerte aventuras inolvidables, escapadas regeneradoras y momentos de pura inspiración. ¡Este es el momento perfecto para salir de la rutina y comenzar a crear recuerdos que te acompañarán toda la vida!',
            ],
            [
            'introduccion' => 'Inspírate para tu próxima aventura en cualquier rincón del planeta.',
            'parrafo' => 'Descubre el mundo a través de destinos que inspiran, sorprenden y despiertan el deseo de explorar. En esta sección encontrarás una cuidada selección de países que ofrecen experiencias únicas, desde paisajes naturales asombrosos hasta culturas milenarias, ciudades vibrantes y rincones poco explorados. Ya sea que sueñes con caminar entre templos antiguos en Asia, perderte en mercados coloridos de África, recorrer carreteras escénicas en Oceanía o descansar en playas paradisíacas del Caribe, aquí te damos opciones para todos los estilos de viaje y todos los tipos de viajeros. Cada país que te presentamos es una puerta abierta a nuevas aventuras, sabores, sonidos e historias. Explora el mapa, encuentra tu próximo destino y empieza a planear un viaje que quedará grabado en tu memoria para siempre. El mundo está lleno de maravillas… y todas te están esperando.',
            ],
            [
            'introduccion' => 'Lugares donde cada calle cuenta una historia y cada rincón tiene alma.',
            'parrafo' => 'Estos destinos cautivan por su personalidad única, su historia viva y su belleza atemporal. Aquí no se trata de grandes metrópolis, sino de urbes que enamoran por su arquitectura, su ambiente local y su capacidad de hacerte sentir como en casa. Desde callejuelas empedradas llenas de arte hasta plazas animadas donde la vida fluye lentamente, cada ciudad seleccionada en esta sección ofrece una experiencia íntima y auténtica. Son lugares ideales para caminar sin prisa, descubrir cafés escondidos, conversar con los locales y dejarse llevar por el ritmo propio de cada cultura. Ya sea un pueblo colonial en América Latina, una capital europea con siglos de historia, o una ciudad asiática que mezcla tradición y modernidad, aquí encontrarás destinos que no solo se visitan: se viven y se sienten. Perfectos para quienes valoran lo auténtico, lo estético y lo humano.',
            ],
            [
            'introduccion' => 'Explora paisajes que despiertan el alma y aventuras que te conectan con lo esencial.',
            'parrafo' => 'Si eres un espíritu inquieto que busca salir de la rutina y sumergirse en lo salvaje, lo puro y lo inesperado, aquí encontrarás destinos que te invitan a desafiar tus límites y reconectar con la Tierra: desde montañas majestuosas que te retan a escalar hasta selvas tropicales llenas de vida, lagos cristalinos, volcanes activos, glaciares imponentes y playas vírgenes donde el tiempo parece detenerse. Cada lugar está pensado para ofrecer experiencias intensas, ya sea a pie, en kayak, en bicicleta o simplemente contemplando el paisaje. Además de la aventura física, estos destinos te acercan a culturas que han vivido en armonía con la naturaleza por generaciones. Si buscas viajar con propósito, respirar aire puro, sentir la adrenalina y llevarte recuerdos que no caben en una foto, este es tu lugar.',
            ],
        ]);
    }
}

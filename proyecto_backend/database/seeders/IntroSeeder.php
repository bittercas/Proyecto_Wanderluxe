<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('introduccion')->insert([
            [
            'titulo' => 'WanderLuxe - Viaja con Estilo y Descubre sin Límites',
            'descripcion' => 'WanderLuxe es más que una página web, es tu compañero ideal para explorar el mundo en 2025. Nuestra misión es hacer que tu experiencia de viaje sea única, desde la planificación hasta el regreso. Ofrecemos recomendaciones de destinos cuidadosamente seleccionados, que van más allá de lo común, asegurando que encuentres el viaje perfecto para ti, sin importar tu estilo o presupuesto. Ya sea que busques escapadas de lujo, aventuras únicas o destinos exóticos que pocos conocen, WanderLuxe está aquí para inspirarte y facilitarte cada paso de tu viaje. Además, contamos con herramientas y recursos que te permiten organizar tu itinerario, reservar alojamiento y planificar actividades sin complicaciones. En WanderLuxe sabemos que un viaje es mucho más que un destino, es la experiencia completa. Con nosotros, tendrás acceso a destinos exclusivos, itinerarios personalizados y recomendaciones de expertos, para que tu próxima aventura sea inolvidable.',
            'imagen' => 'uzbekistan.jpg',
            ]
            [
            'titulo' => '¿Qué encontrarás en WanderLuxe?',
            'descripcion' => 'En WanderLuxe, nos enfocamos en brindarte todo lo necesario para que cada viaje se convierta en una experiencia inolvidable. Aquí encontrarás una cuidada selección de destinos recomendados para 2025, que incluyen desde playas paradisíacas hasta rincones exóticos y exclusivos pensados para todo tipo de viajeros. Contamos con una amplia variedad de destinos turísticos que abarcan grandes ciudades, aventuras al aire libre e islas escondidas, adaptándose a tus gustos y preferencias. Te ayudamos a preparar tu viaje de forma sencilla y eficiente: solo inicia sesión y accede a tu guía personalizada. Además, ponemos a tu disposición una sección para que planifiques y guardes todos tus viajes, y toda la inspiración necesaria para que disfrutes de cada etapa de tu próxima aventura.',
            'imagen' => 'elefante.jpg',
            ],
        ]);
    }
}

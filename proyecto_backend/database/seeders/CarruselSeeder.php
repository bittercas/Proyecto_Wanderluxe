<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarruselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('carrusel')->insert([

            [
            'titulo' => 'WanderLuxe',
            'parrafo' => 'Descubre El Mundo A Tu Alrededor',
            'imagen' => 'cover_page.jpg',
            ],
            [
            'titulo' => 'Tailandia',
            'parrafo' => 'Descubre el encanto de un paraíso de culturas, colores y sonrisas infinitas.',
            'imagen' => 'tailandia_templo.jpg',
            ],
            [
            'titulo' => 'Groenlandia',
            'parrafo' => 'Un lugar donde el cielo danza con las luces del norte, pintando el invierno de magia y misterio.',
            'imagen' => 'groenlandia.jpg',
            ],
            [
            'titulo' => 'Nueva York',
            'parrafo' => 'Descubre la ciudad que nunca duerme.',
            'imagen' => 'cover.jpg',
            ],
            [
            'titulo' => 'Bolivia',
            'parrafo' => 'Un destino donde las montañas se encuentran con el cielo, los lagos reflejan la inmensidad de la tierra y cada rincón guarda una historia ancestral.',
            'imagen' => 'bolivia.jpg',
            ],
            [
            'titulo' => 'Chongqing',
            'parrafo' => 'Una ciudad donde el río Yangtsé abraza las montañas, y la modernidad se fusiona con la tradición en un vibrante espectáculo de luces y cultura.',
            'imagen' => 'chongqing2.jpg',
            ],
        ]);
    }
}

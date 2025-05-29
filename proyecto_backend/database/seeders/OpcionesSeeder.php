<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('opciones')->insert([
            [
            'titulo' => 'Destinos por Continente',
            'descripcion' => 'Explora el mundo a tu manera con nuestra selección de destinos por continente. Desde las selvas de América del Sur hasta las ciudades vibrantes de Asia, pasando por la historia viva de Europa, la naturaleza salvaje de África, las islas paradisíacas de Oceanía y los rincones menos explorados de América Central, aquí encontrarás experiencias únicas adaptadas a cada estilo de viajero.',
            'imagen' => 'continente.jpg',
            ]
            [
            'titulo' => 'Ciudades con Encanto',
            'descripcion' => 'Descubre destinos únicos donde la historia, la arquitectura, la cultura local y la vida cotidiana crean una atmósfera inolvidable. Desde callejones empedrados llenos de historia hasta barrios creativos llenos de vida, estas ciudades cautivan por su personalidad, su belleza y esa magia especial que las hace irresistibles. Son lugares para caminar sin prisa, descubrir detalles y dejarse llevar por su esencia.',
            'imagen' => 'ciudad.jpg',
            ],
            [
            'titulo' => 'Aventuras y Naturaleza',
            'descripcion' => 'Todo para quienes buscan emociones auténticas y paisajes que dejan sin aliento. Ya sea caminando entre montañas, explorando selvas, navegando en aguas cristalinas o acampando bajo las estrellas, estos destinos te conectan con la tierra, el mar y el aire de una forma intensa y liberadora. Aquí, cada viaje es una experiencia viva, perfecta para escapar de lo cotidiano y descubrir lo extraordinario.',
            'imagen' => 'aventura.jpg',
            ],
        ]);
    }
}

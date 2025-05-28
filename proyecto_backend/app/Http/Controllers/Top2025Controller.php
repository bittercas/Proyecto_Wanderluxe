<?php

namespace App\Http\Controllers;

/*
Este controlador maneja la presentación de la información estática sobre textos
que se muestra en las vistas, traida de la base de datos
*/
use App\Models\Top2025;
use App\Models\Introduccion;
use App\Models\Carrusel;
use App\Models\Secciones;
use Illuminate\Http\Request;

class Top2025Controller extends Controller
{
    //Función para traer los textos de las tablas carrusel, top2025, introduccion y secciones
    public function mostrarDestinos() {

        $carruseles = Carrusel::all();
        $destinos = Top2025::all();
        $intros = Introduccion::all();
        $parrafos = Secciones::all();
        return view('index', compact('carruseles', 'intros', 'destinos', 'parrafos'));

    }
}





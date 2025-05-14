<?php

namespace App\Http\Controllers;

use App\Models\Top2025;
use App\Models\Introduccion;
use App\Models\Carrusel;
use App\Models\Secciones;
use Illuminate\Http\Request;

class Top2025Controller extends Controller
{
    public function mostrarDestinos(){

        $carruseles = Carrusel::all();
        $destinos = Top2025::all();
        $intros = Introduccion::all();
        $parrafos = Secciones::all();
        return view('index', compact('carruseles', 'intros', 'destinos', 'parrafos'));

    }
}





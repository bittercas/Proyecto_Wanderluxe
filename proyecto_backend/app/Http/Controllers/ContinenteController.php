<?php

namespace App\Http\Controllers;

use App\Models\Continentes;
use App\Models\Ciudades;
use App\Models\Aventuras;
use App\Models\Opciones;
use Illuminate\Http\Request;

class ContinenteController extends Controller
{
    public function mostrarDestinos(){

        $continentes = Continentes::all();
    
        return view('europa', compact('continentes'));
    }

    public function mostrarCiudades(){

        $ciudades = Ciudades::all();
    
        return view('ciudades', compact('ciudades'));
    }

    public function mostrarAventuras(){

        $aventuras = Aventuras::all();
    
        return view('aventuras', compact('aventuras'));
    }

    public function mostrarOpciones(){

        $opciones = Opciones::all();
    
        return view('opciones', compact('opciones'));
    }
}

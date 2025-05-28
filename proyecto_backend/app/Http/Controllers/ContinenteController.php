<?php

namespace App\Http\Controllers;

/*
Este controlador maneja la presentación de la información estática sobre destinos
que se muestra en las vistas, traida de la base de datos
*/
use App\Models\Continentes;
use App\Models\Ciudades;
use App\Models\Aventuras;
use App\Models\Opciones;
use Illuminate\Http\Request;

class ContinenteController extends Controller
{
    //Función para mostrar los destinos por países por continente 
    public function mostrarDestinos() {

        $continentes = Continentes::all();
    
        return view('europa', compact('continentes'));

    }

    //Función para mostrar los destinos por ciudades 
    public function mostrarCiudades() {

        $ciudades = Ciudades::all();
    
        return view('ciudades', compact('ciudades'));

    }

    //Función para mostrar los destinos por aventuras 
    public function mostrarAventuras() {

        $aventuras = Aventuras::all();
    
        return view('aventuras', compact('aventuras'));

    }

    //Función para mostrar el menu de opciones de tipos de destinos
    public function mostrarOpciones() {

        $opciones = Opciones::all();
    
        return view('opciones', compact('opciones'));

    }
}

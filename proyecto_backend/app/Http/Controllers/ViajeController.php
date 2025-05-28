<?php

namespace App\Http\Controllers;

/*
Este controlador maneja el CRUD (Creación, Lectura, Edición y Borrado) de los
viajes que realizan los usuarios, a´sí como el mapa interactivo
*/
use App\Models\User;
use App\Models\Viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    //Función para crear un viaje hecho por el usuario
    public function crearViaje(Request $request) {

        $request->validate([
            'destino' => 'required|string|max:255',
            'inicio' => 'required|date',
            'fin' => 'required|date',
            'descripcion' => 'required|string|max:255',
            'presupuesto' => 'required|string|max:255',
        ]);

        auth()->user()->viajes()->create([
            'destino' => $request->destino,
            'inicio' => $request->inicio,
            'fin' => $request->fin,
            'descripcion' => $request->descripcion,
            'presupuesto' => $request->presupuesto,
        ]);

        return redirect()->route('mostrarViajes');

    }

    //Función para mostrar viajes creados por el usuario
    public function mostrarViajes() {

        $viajes = auth()->user()->viajes;

        $mensaje = $viajes->isEmpty() ? 'No tienes viajes en este momento.' : null;

        return view('mostrar', compact('viajes', 'mensaje'));

    }

    //Función para eliminar un viaje creado por el usuario, el cual es buscado por su id
    public function eliminarViaje($id) {
        
        $viaje = Viaje::find($id);

        if ($viaje) {

            $viaje->delete();

            return redirect()->route('mostrarViajes')->with('success', 'Viaje eliminado');

        }

        else {

            return redirect()->route('mostrarViajes')->with('error', 'Viaje no encontrado');

        } 
    }

    //Función para editar un viaje hecho por el usuario, el cual es buscado por su id
    public function editarViaje($id) {

        $viaje = auth()->user()->viajes()->findOrFail($id);

        return view('editar', compact('viaje'));

    }

    //Función para actualizar un viaje creado por el usuario
    public function actualizarViaje(Request $request, $id) {

        $viaje = auth()->user()->viajes()->findOrFail($id);

        $request->validate([
            'destino' => 'required|string|max:255',
            'inicio' => 'required|date',
            'fin' => 'required|date',
            'descripcion' => 'required|string|max:255',
            'presupuesto' => 'required|string|max:255',
        ]);

        $viaje->update($request->all());

        return redirect()->route('mostrarViajes')->with('success', 'Viaje actualizado correctamente.');

    }

    //Función para mostrar un mapa interactivo
    public function mostrarMapa() {
        
        return view('mapa');

    }
}

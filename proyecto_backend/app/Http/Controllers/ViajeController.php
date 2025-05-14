<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    public function crearViaje(Request $request){

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

    public function mostrarViajes(){

        $viajes = auth()->user()->viajes;

        $mensaje = $viajes->isEmpty() ? 'No tienes viajes en este momento.' : null;

        return view('mostrar', compact('viajes', 'mensaje'));
    }

    public function eliminarViaje($id){
        
        $viaje = Viaje::find($id);

        if ($viaje) {
            $viaje->delete();
            return redirect()->route('mostrarViajes')->with('success', 'Viaje eliminado');
        }
        else {
            return redirect()->route('mostrarViajes')->with('error', 'Viaje no encontrado');
        } 
    }

    public function editarViaje($id){

        $viaje = auth()->user()->viajes()->findOrFail($id);
        return view('editar', compact('viaje'));
    }

    public function actualizarViaje(Request $request, $id){
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

    public function mostrarMapa(){
        
        return view('mapa');

    }
}

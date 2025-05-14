<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function registrarUsuario(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'correo' => 'required',
            'contrasenya' => 'required|min:8',
            'contrasenya_confirmation' => 'required|min:8',
        ]);

        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'correo' => $request->correo,
            'contrasenya' => Hash::make($request->contrasenya), // Encriptar la contraseña
        ]);

        return redirect()->route('creacion');
    }
}

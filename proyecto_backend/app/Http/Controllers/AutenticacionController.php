<?php

namespace App\Http\Controllers;

//Este controlador maneja el registro de usuarios, así como su autenticación para el ingreso y salida del sistema 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AutenticacionController extends Controller
{   
    //Función para registrar usuarios
    public function registrar(Request $request){

        //Validar los campos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        //Verificar si el correo ya está registrado
        $usuarioExistente = User::where('email', $request->email)->first();

        if($usuarioExistente) {
            return back()->with('error', 'Este correo ya está registrado.');
        } else {
            //Crear un nuevo usuario
            $usuario = new User();
            $usuario->name = $request->name;
            $usuario->email = $request->email;
            $usuario->password = Hash::make($request->password);
            $usuario->save();
        
            return to_route('creacion');
        }
    }

    //Función para iniciar sesión
    public function ingresar(Request $request) {

        $acceso = [
            'email' => $request->email,
            'password' => $request->password
        ];

        //Verificar si el usuario existe
        $usuario = User::where('email', $request->email)->first();

        if (!$usuario) {
            return redirect()->back()->with('error', 'Este usuario no está registrado.');
        }

        //Autenticar al usuario
        if(Auth::attempt($acceso)) {
            return to_route('privada');
        } else {
            return redirect()->back()->with('error', 'Correo o contraseña incorrectos.');   
        }
    }

    //Función que redirige a la sesión privada de usuario una vez autenticado
    public function sesionIniciada() {

        if(Auth::check()){
            return view('sesionprivada');
        }

        return redirect()->route('login');
    }

    //Función para cerrar sesión
    public function logout() {

        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AutenticacionController extends Controller
{   

    public function registrar(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $usuarioExistente = User::where('email', $request->email)->first();

        if($usuarioExistente){
            return back()->with('error', 'Este correo ya está registrado.');
        }
        else{
            $usuario = new User();
            $usuario->name = $request->name;
            $usuario->email = $request->email;
            $usuario->password = Hash::make($request->password);
            $usuario->save();
        
            return to_route('creacion');
        }
    }

    public function ingresar(Request $request){
        $acceso = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $usuario = User::where('email', $request->email)->first();

        if (!$usuario) {
            // Si no encontramos el usuario, redirigimos con el mensaje de "Usuario no registrado"
            return redirect()->back()->with('error', 'Este usuario no está registrado.');
        }

        if(Auth::attempt($acceso)){
            return to_route('privada');
            //return redirect()->route('privada');
            //return to_route('privada');
        }
        else{
            return redirect()->back()->with('error', 'Correo o contraseña incorrectos.');   
            //return redirect()->route('inicio-sesion');
            //return to_route('iniciar.sesion');
        }
    }
    /*public function iniciarSesion(Request $request)
    {
        /*$request->validate([
            'correo' => 'required|email',
            'contrasenya' => 'required|min:8',
        ]);

        $credenciales = [
            'correo' => $request->correo,
            'password' => $request->contrasenya,
        ];

        if(Auth::attempt($credenciales)){
            return redirect()->inteded(route('privada'));
        }
        return back()->withErrors([
            'correo' => 'Credenciales incorrectas.',
        ]);

        // Buscar el usuario por correo
        /*$usuario = Usuario::where('correo', $request->correo)->first();
        $contra = Hash::check($request->contrasenya, $usuario->contrasenya);
        // Validar si el usuario existe y la contraseña es correcta
        if ($usuario && Hash::check($request->contrasenya, $usuario->contrasenya)) {
            // Iniciar sesión manualmente
            Auth::login($usuario);

            // Redirigir al dashboard o página principal
            return response()->json([
                'status' => 'success',
                'message' => 'Inicio de sesión exitoso',
                'redirect' => route('sesionprivada') // Ajusta a la ruta que desees
            ]);
        }
        else {
            return redirect()->route('inicio');
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Credenciales incorrectas'
        ], 401);
    }

    public function cerrarSesion()
    {
        Auth::logout();
        return redirect()->route('inicio-sesion');
    }
    }

    public function cerrarSesion()
    {
        Auth::logout();
        return redirect()->route('inicio-sesion'); // Redirigir al formulario de inicio de sesión
    }*/

    public function sesionIniciada() 
    {
        if(Auth::check()){
            return view('sesionprivada');
        }
        return redirect()->route('login');
        //return to_route('iniciar.sesion');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}

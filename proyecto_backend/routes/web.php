<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\Top2025Controller;
use App\Http\Controllers\ContinenteController;

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('index');
})->name('inicio');*/

Route::get('/login', function () {
    return view('login-form-20.login-form-20.index');
})->name('login');

Route::get('/registrarse', function () {
    return view('login-form-20.login-form-20.registro');
})->name('registrarse');

Route::get('/america', function () {
    return view('america');
})->name('america');

/*Route::get('/europa', function () {
    return view('europa');
})->name('europa');*/

Route::get('/inicio', [Top2025Controller::class, 'mostrarDestinos'])->name('inicio');

Route::post('/registrar', [AutenticacionController::class, 'registrar'])->name('registrar');

Route::get('/usuario-creado', function () {
    return view('login-form-20.login-form-20.creacion');
})->name('creacion');

Route::get('/destinos2025', [ContinenteController::class, 'mostrarDestinos'])->name('europa');

Route::get('/ciudades-con-encamto', [ContinenteController::class, 'mostrarCiudades'])->name('ciudades');

Route::get('/aventuras', [ContinenteController::class, 'mostrarAventuras'])->name('aventuras');

Route::get('/descubre', [ContinenteController::class, 'mostrarOpciones'])->name('opciones');

Route::post('/iniciar-sesion', [AutenticacionController::class, 'ingresar'])->name('iniciar.sesion');

Route::get('/destinos', [Top2025Controller::class, 'mostrarSeccion'])->name('destinos');

//Route::post('/cerrar-sesion', [AutenticacionController::class, 'cerrarSesion'])->name('cerrar.sesion');

/*Route::get('/sesion-privada', function () {
    return view('login-form-20.login-form-20.sesionprivada');
})->name('sesionprivada')->middleware('auth');*/

//Route::get('/sesiondeusuario', [AutenticacionController::class, 'ingresar'])->name('privada');

/*Route::middleware('guest')->group(function () {
    Route::get('/inicio', function () {
        return view('index');
    })->name('inicio');
    
    
});*/

Route::middleware('auth')->group(function () {
    Route::get('/sesiondeusuario', function () {
        return view('login-form-20.login-form-20.sesionprivada');
    })->name('privada');
    
    Route::get('/logout', [AutenticacionController::class, 'logout'])->name('logout');

    /*Route::get('/planificar', [AutenticacionController::class, 'planificar'])->name('planificar');*/

    Route::get('/planificar', function () {
        return view('planificar');
    })->name('planificar');

    Route::post('/crear-viaje', [ViajeController::class, 'crearViaje'])->name('crearViaje');

    Route::get('/mis-viajes', [ViajeController::class, 'mostrarViajes'])->name('mostrarViajes');

    Route::delete('/eliminar-viaje/{id}', [ViajeController::class, 'eliminarViaje'])->name('eliminarViaje');

    Route::get('/editar-viaje/{id}', [ViajeController::class, 'editarViaje'])->name('editarViaje');

    Route::put('/actualizar-viaje/{id}', [ViajeController::class, 'actualizarViaje'])->name('actualizarViaje');

    Route::get('/mapa', [ViajeController::class, 'mostrarMapa'])->name('mapa');
});
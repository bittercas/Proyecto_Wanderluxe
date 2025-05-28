<?php

/*Llamada a todos los controladores implicados en las rutas*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\Top2025Controller;
use App\Http\Controllers\ContinenteController;

/*Rutas de acceso público*/
Route::get('/login', function () {

    return view('login-form-20.login-form-20.index');

})->name('login');

Route::get('/registrarse', function () {

    return view('login-form-20.login-form-20.registro');

})->name('registrarse');

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

/*Rutas de acceso privado: el usuario tiene que estar registradop y autenticado*/
Route::middleware('auth')->group(function () {

    Route::get('/sesiondeusuario', function () {

        return view('login-form-20.login-form-20.sesionprivada');

    })->name('privada');
    
    Route::get('/logout', [AutenticacionController::class, 'logout'])->name('logout');

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
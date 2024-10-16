<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// Redirigir la ruta principal (/) a la página de inicio de sesión
Route::get('/', function () {
    return redirect()->route('login');
});

// Rutas de la aplicación
Route::view('/login', 'login')->name('login'); // Vista de inicio de sesión
Route::view('/registro', 'registro')->name('registro'); // Vista de registro
Route::view('/home_registrado', 'home_registrado')->middleware('auth')->name('privada'); // Vista usuario registrado

// Rutas de autenticación
Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro'); // Validar registro
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion'); // Iniciar sesión
Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); // Cerrar sesión
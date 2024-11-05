<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotificacionesController;

// Redirigir la ruta principal (/) a la página de inicio de sesión
Route::get('/', function () {
    return redirect()->route('login');
});

// Rutas de la aplicación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Mostrar el formulario de inicio de sesión
Route::post('/login', [LoginController::class, 'login'])->name('inicia-sesion'); // Procesar el inicio de sesión
Route::get('/registro', [LoginController::class, 'showRegisterForm'])->name('registro'); // Mostrar el formulario de registro
Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro'); // Procesar el registro

// Ruta para la vista protegida por autenticación
Route::view('/home_registrado', 'home_registrado')->name('privada'); // Sin el middleware 'auth'

// Ruta para la vista del formulario de emergencia
Route::view('/formulario_emergencia', 'formulario_emergencia')->name('emergencia'); 

// Ruta para cerrar sesión
Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); 

// Ruta para la vista protegida por autenticación con controlador de notificaciones
Route::get('/home_registrado', [NotificacionesController::class, 'index']);

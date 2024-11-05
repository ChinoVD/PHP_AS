<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotificacionesController;
use App\Http\Controllers\EmpleadosController;

// Redirigir la ruta principal (/) a la página de inicio de sesión
Route::get('/', function () {
    return redirect()->route('login');
});

// Rutas de la aplicación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/registro', [LoginController::class, 'showRegisterForm'])->name('registro');
Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');

// Ruta para la vista protegida por autenticación con controlador de notificaciones
Route::get('/home_registrado', [EmpleadosController::class, 'index'])->name('privada');

// Ruta para la vista del formulario de emergencia
Route::view('/formulario_emergencia', 'formulario_emergencia')->name('emergencia'); 

// Ruta para cerrar sesión
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); 
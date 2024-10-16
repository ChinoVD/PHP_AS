<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController; // Asegúrate de que esté al inicio

Route::get('/login', function () {
    return view('login');
})->name('login');

// Redirigir la ruta principal (/) a la página de inicio de sesión
Route::get('/', function () {
    return redirect()->route('login');
});

// Mostrar el formulario de registro
Route::get('/registro', [RegistroController::class, 'showRegistroForm'])->name('registro');

// Procesar el registro (almacenar en la base de datos)
Route::post('/registro', [RegistroController::class, 'procesar'])->name('registro.procesar');

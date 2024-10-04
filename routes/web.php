<?php
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
})->name('login');

// Redirigir la ruta principal (/) a la página de inicio de sesión
Route::get('/', function () {
    return redirect()->route('login');
});

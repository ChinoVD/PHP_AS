<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Corrección de typo
use App\Models\User; // Asegúrate de que sea el nombre correcto de tu modelo
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request) // Corrección de typo
    {
       // Validación
    $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'contraseña' => 'required|string|min:8|confirmed',
        'rol' => 'required|string',
    ]);

    $user = new User(); // Cambiado de "usuario" a "user"

    $user->nombre = $request->nombre;
    $user->email = $request->email;
    $user->rol = $request->rol;
    $user->password = Hash::make($request->contraseña); // Aquí sigue usando "contraseña", pero considera cambiarlo a "password"

    $user->save();

    Auth::login($user); // Cambiado de "usuario" a "user"

    return redirect(route('privada'));
}

public function login(Request $request)
{
    // Validación
    $request->validate([
        'email' => 'required|string|email',
        'contraseña' => 'required|string',
    ]);

    $credentials = [
        "email" => $request->email,
        "contraseña" => $request->contraseña,
    ];

    $remember = $request->has('remember');

    if (Auth::attempt($credentials, $remember)) {
        $request->session()->regenerate();
        return redirect()->intended(route('privada'));
    } else {
        return redirect('login')->withErrors(['email' => 'Las credenciales son incorrectas.']);
    }
}

public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect(route('login'));
    }
}

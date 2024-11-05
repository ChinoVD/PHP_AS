<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Importa Log aquí

class LoginController extends Controller
{
    // Método para mostrar el formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('login');
    }

    // Método para mostrar el formulario de registro
    public function showRegisterForm()
    {
        return view('registro');
    }

    public function register(Request $request)
    {
        // Validación
        $request->validate([
            'rut' => 'required|string|max:10|unique:empleados',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:empleados',
            'password' => 'required|string|min:8|confirmed',
            'rol' => 'required|in:medico,enfermero,administrador,paramedico',
            'telefono' => 'nullable|string|max:15',
            'direccion' => 'nullable|string|max:255',
        ]);

        $empleado = new Empleado();

        // Asignar valores
        $empleado->rut = $request->rut;
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->email = $request->email;
        $empleado->rol = $request->rol;
        $empleado->password = Hash::make($request->password);
        $empleado->telefono = $request->telefono;
        $empleado->direccion = $request->direccion;

        $empleado->save();

        Auth::login($empleado);

        return redirect(route('privada'));
    }

    public function login(Request $request)
    {
        Log::info('Intento de inicio de sesión', $request->all()); // Log para depuración
        // Validación
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string', // Corrige el campo a "password"
        ]);

        $credentials = $request->only('email', 'password');

        $remember = $request->has('remember');

        if (Auth::attempt($credentials)) {
            Log::info('Inicio de sesión exitoso', ['user_id' => Auth::id()]);
            // Redirigir al usuario a la página deseada
            $request->session()->regenerate(); // Regenerar la sesión
            return redirect()->route('privada');
        } else {
            Log::warning('Fallo en el inicio de sesión', $credentials);
            // Retornar un mensaje de error al usuario
            return redirect()->back()->withErrors(['email' => 'Las credenciales son incorrectas.']);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de tener el modelo correspondiente

class RegistroController extends Controller
{
    // Método para mostrar el formulario de registro
    public function showRegistroForm()
    {
        return view('registro'); // Asegúrate de que esta vista exista en resources/views
    }

    public function procesar(Request $request)
    {
        // Validación de los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'rol' => 'required|string',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'password' => 'required|string|min:8|confirmed', // Confirmación de la contraseña
        ]);
    
        dd($validatedData); // Muestra los datos validados
    
        // Crear un nuevo usuario
        $usuario = new Usuario();
        $usuario->nombre = $validatedData['nombre'];
        $usuario->apellido = $validatedData['apellido'];
        $usuario->rol = $validatedData['rol'];
        $usuario->email = $validatedData['email'];
        $usuario->contraseña = bcrypt($validatedData['password']); // Encriptar la contraseña
        $usuario->email_veridied_at = null; // Si no estás verificando el email en el registro
        $usuario->remember_token = null; // O asignarlo según tus necesidades

        // Intentar guardar el usuario en la base de datos
        try {
            $usuario->save(); // Guardar el usuario en la base de datos
        } catch (\Exception $e) {
            // Capturar y mostrar el error
            dd($e->getMessage());
        }
    
        // Redirigir o retornar respuesta
        return redirect()->route('registro.exito'); // Ajusta la ruta según sea necesario
    }
}

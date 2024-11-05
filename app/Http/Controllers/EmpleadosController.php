<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Horario;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index()
    {
        // Traer los datos de empleados y guardar en una variable
        $empleados = Empleado::all();

        // Traer los horarios de los empleados
        $empleadosEnTurno = [];
        foreach ($empleados as $empleado) {
            $horario = Horario::where('rut_empleado', $empleado->rut)->first();
            if ($horario) { // Verificamos que el horario exista
                $empleadosEnTurno[] = [
                    'nombre' => $empleado->nombre,
                    'rut' => $empleado->rut,
                    'hora_inicio' => $horario->hora_inicio,
                    'hora_fin' => $horario->hora_fin,
                    'turno' => $horario->turno,
                ];
            }
        }

        // Pasar los datos a la vista
        return view('home_registrado', compact('empleadosEnTurno'));
    }
}


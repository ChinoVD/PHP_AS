<?php

namespace App\Http\Controllers;

use App\Models\HistorialMedico;
use Illuminate\Http\Request;
use App\Models\EmergenciaRegistrada;
use App\Models\CodigoEmergencia;

class NotificacionesController extends Controller
{
    public function index()
    {
        $emergencias = EmergenciaRegistrada::with('codigoEmergencia', 'paciente')->get();
    
        $notificaciones = $emergencias->map(function ($emergencia) {
            return [
                    'rut' => $emergencia->paciente->rut ?? 'Desconocido', // Agregar el RUT del paciente
                    'titulo' => 'Emergencia: ' . $emergencia->codigoEmergencia->nombre_codigo,
                    'contenido' => $emergencia->descripcion,
                    'detalles' => [
                    'causas' => $emergencia->historialMedico->diagnostico ?? 'No disponible',
                    'codigo' => $emergencia->codigoEmergencia->nombre_codigo,
                    'nombre' => $emergencia->paciente->nombre ?? 'Desconocido',
                    'edad' => $emergencia->paciente ? $emergencia->paciente->edad : 'Desconocida', // Verificación de paciente
                ],
            ];
        });
    
        // Obtener los historiales médicos (ajuste según su lógica)
        $historiales = HistorialMedico::with('paciente')->get();
    
        return view('home_registrado', compact('notificaciones', 'historiales'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\HistorialMedico;
use App\Models\EmergenciaRegistrada;
use App\Models\CodigoEmergencia;
use App\Models\Paciente;

class NotificacionesController extends Controller
{
    public function index()
    {
        // Obtener todos los pacientes
        $pacientes = Paciente::all();

        // Obtener todas las emergencias registradas con sus códigos de emergencia
        $emergencias = EmergenciaRegistrada::with('codigoEmergencia')->get();

        // Obtener todos los historiales médicos con sus pacientes
        $historiales = HistorialMedico::with('paciente')->get();

        // Crear un array para las notificaciones
        $notificaciones = [];

        // Recorrer cada paciente
        foreach ($pacientes as $paciente) {
            // Filtrar los historiales médicos y emergencias relacionadas con el paciente
            $historialPaciente = $historiales->where('rut_paciente', $paciente->rut);
            $emergenciasPaciente = $emergencias->where('rut_paciente', $paciente->rut);

            // Recorrer cada historial médico del paciente
            foreach ($historialPaciente as $historial) {
                // Recorrer cada emergencia del paciente
                foreach ($emergenciasPaciente as $emergencia) {
                    // Buscar el código de emergencia asociado
                    $codigo = CodigoEmergencia::find($emergencia->id_codigo);

                    // Agregar la notificación si hay datos
                    if ($codigo) {
                        $notificaciones[] = [
                            'rut' => $paciente->rut,
                            'nombre' => $paciente->nombre,
                            'apellido' => $paciente->apellido,
                            'edad' => $paciente->edad,
                            'genero' => $paciente->genero,
                            'fecha_consulta' => $historial->fecha_consulta,
                            'diagnostico' => $historial->diagnostico,
                            'tratamiento' => $historial->tratamiento,
                            'rut_medico_responsable' => $historial->rut_medico_responsable,
                            'fecha_hora' => $emergencia->fecha_hora,
                            'descripcion' => $emergencia->descripcion,
                            'nombre_codigo' => $codigo->nombre_codigo,
                        ];
                    }
                }
            }
        }

        // Pasar los datos a la vista
        return view('home_registrado')->with('notificaciones', $notificaciones);
    }
}

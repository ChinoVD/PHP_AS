<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistorialMedico extends Model
{
    protected $table = 'historial_medico'; // Nombre correcto de la tabla

    public function codigoEmergencia()
    {
        return $this->belongsTo(CodigoEmergencia::class, 'id_codigo', 'nombre_codigo');
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'rut_paciente', 'rut'); // Define la relación correcta
    }
}

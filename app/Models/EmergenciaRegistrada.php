<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class EmergenciaRegistrada extends Model
{
    use HasFactory;

    protected $table = 'emergencias_registradas'; // Especifica la tabla si el nombre no es plural

    protected $fillable = [
        'rut_paciente',
        'id_codigo',
        'fecha_hora',
        'descripcion',
        'rut_atendido_por',
    ];

    public function codigoEmergencia()
{
    return $this->belongsTo(CodigoEmergencia::class, 'id_codigo', 'id_codigo');
}

public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'rut_paciente', 'rut');
        // 'rut_paciente' es la clave foránea en emergencias_registradas
        // 'rut' es la clave primaria en la tabla pacientes
    }
}

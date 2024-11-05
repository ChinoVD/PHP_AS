<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnoEmergencia extends Model
{
    use HasFactory;

    protected $table = 'turnos_emergencia'; // Especifica la tabla si el nombre no es plural

    protected $fillable = [
        'rut_empleado',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'estado',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = [
        'rut_empleado',
        'dia_semana',
        'hora_inicio',
        'hora_fin',
        'turno',
    ];
}

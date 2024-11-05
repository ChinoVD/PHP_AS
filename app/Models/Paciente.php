<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes'; // Especifica la tabla si el nombre no es plural

    protected $fillable = [
        'rut',
        'nombre',
        'apellido',
        'edad',
        'genero',
        'direccion',
        'telefono',
    ];
}

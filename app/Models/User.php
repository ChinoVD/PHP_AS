<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'rol',
        'email',
        'contraseña',
        'email_veridied_at', // Si necesitas guardarlo en el registro
        'remember_token', // Si lo necesitas
    ];

    public $timestamps = true; // Para manejar created_at y updated_at
}

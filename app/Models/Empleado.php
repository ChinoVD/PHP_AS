<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Empleado extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $table = 'empleados'; // Asegúrate de especificar la tabla si es diferente de "empleados"

    protected $primaryKey = 'rut'; // Especifica la clave primaria

    public $incrementing = false; // Indica que la clave primaria no es un entero autoincrementable
    protected $keyType = 'string'; // Especifica que el tipo de la clave primaria es string

    protected $fillable = [
        'rut',
        'nombre',
        'apellido',
        'email',
        'password',
        'rol',
        'telefono',
        'direccion',
        'fecha_contratacion',
        'estado',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}

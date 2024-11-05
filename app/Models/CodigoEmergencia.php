<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodigoEmergencia extends Model
{
    use HasFactory;

    protected $table = 'codigos_emergencia';

    protected $primaryKey = 'id_codigo';

    public $timestamps = false; // Cambia a true si tienes columnas de timestamp.

    protected $fillable = [
        'id_codigo',
        'nombre_codigo',
        'descripcion',
        'prioridad',
    ];
}

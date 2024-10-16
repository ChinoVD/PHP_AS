<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable, HasFactory;

    /**
     * Los atributos que son asignables masivamente.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'rol',
        'email',
        'password', // Cambiado de 'contraseña' a 'password'
    ];

    /**
     * Los atributos que deben ser ocultos para los arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', // Asegúrate de que sea 'password'
        'remember_token',
    ];

    /**
     * Los atributos que deben ser mutados a tipos nativos.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

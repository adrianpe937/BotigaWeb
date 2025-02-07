<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    protected $table = 'usuarios'; // Especifica el nombre de la tabla

    protected $fillable = [
        'username', 'numero', 'email', 'password', // Asegúrate de incluir 'password'
    ];

    protected $hidden = [
        'password', // Oculta la contraseña en las respuestas
    ];
}
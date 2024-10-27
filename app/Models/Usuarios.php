<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'USUARIOS';

    protected $fillable = [
        'NOMBRES',
        'APELLIDO',
        'EMAIL',
        'TELEFONO',
        'CONTRASENA',
        'IMAGEN_PERFIL',
        'ACTIVO',
        'FECHA_NACIMIENTO',
        'SEXO'
    ];
}

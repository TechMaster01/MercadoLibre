<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direcciones extends Model
{
    use HasFactory;

    protected $table = 'DIRECCIONES_USUARIO';

    protected $fillable = [
        'ID_USUARIO',
        'NOMBRE_COMPLETO',
        'CODIGO_POSTAL',
        'ESTADO',
        'MUNICIPIO',
        'COLONIA',
        'CALLE',
        'NUMERO_EXTERIOR',
        'NUMERO_INTERIOR',
        'CALLE_1',
        'CALLE_2',
        'CONTACTO',
        'INDICACIONES'
    ];
}
